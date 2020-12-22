<?php

namespace App\Controllers\User\API;


use App\App;
use App\Controllers\Base\API\AuthController;
use App\Views\Forms\Review\ReviewCreateForm;
use Core\Api\Response;

class ReviewApiController extends AuthController
{
    public function create(): string
    {

        $response = new Response();
        $form = new ReviewCreateForm();

        if ($form->validate()) {
            $current_user = App::$session->getUser();
            $users = App::$db->getRowsWhere('users');

            foreach ($users as $id => $user) {
                if ($current_user['email'] === $user['email']) {
                    $user_id = $id;
                }
            }

            $reviews = $form->values();

            $reviews['id'] = App::$db->insertRow('reviews', $form->values() + [
                    'user_id' => $user_id,
                    'time' => $this->timeFormat(time())
                ]);

            $reviews = $this->buildRow($current_user, $reviews);
            $response->setData($reviews);
        } else {
            $response->setErrors($form->getErrors());
        }

        // Returns json-encoded response
        return $response->toJson();
    }


    /**
     * Formats row for json to be used in update method,
     * so that the data would be updated in the same format.
     *
     * @param $user
     * @param $feedback
     * @return array
     */
    private function buildRow($user, $reviews): array
    {
        return $row = [
            'id' => $reviews['id'],
            'name' => $user['user_name'],
            'comment' => $reviews['comment'],
            'timestamp' => $this->timeFormat(time())
        ];
    }

    /**
     * Returns formatted time from timestamp given in row.
     *
     * @param $time
     * @return string
     */
    private function timeFormat($time)
    {
        return date('Y-m-d H:i', $time);
    }
}