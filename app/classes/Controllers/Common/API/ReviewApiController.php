<?php


namespace App\Controllers\Common\API;


use App\App;
use Core\Api\Response;

class ReviewApiController
{
    public function index(): string
    {
        $response = new Response();

        $reviews = App::$db->getRowsWhere('reviews');

        $rows = $this->buildRows($reviews);

        // Setting "what" to json-encode
        $response->setData($rows);

        // Returns json-encoded response

        return $response->toJson();
    }


    /**
     * Formats rows from given @param (in this case - orders data)
     * Intended use is for setting data in json.
     *
     * @param $reviews
     * @return mixed
     */
    private function buildRows($reviews)
    {
        foreach ($reviews as $id => &$row) {
            $user = App::$db->getRowById('users', $row['user_id']);

            $row = [
                'id' => $id,
                'name' => $user['first_name'],
                'comment' => $row['comment'],
                'time' => $row['time']
            ];
        }

        return $reviews;
    }
}