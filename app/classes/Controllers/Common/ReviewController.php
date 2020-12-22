<?php

namespace App\Controllers\Common;

use App\App;
use App\Views\BasePage;
use App\Views\Forms\Review\ReviewCreateForm;
use App\Views\Tables\User\ReviewTable;
use Core\View;
use Core\Views\Link;

class ReviewController
{
    protected BasePage $page;

    public function __construct()
    {
        $this->page = new BasePage([
            'title' => 'About Us',
            'js' => ['/media/js/review.js']
        ]);
    }

    public function index(): ?string
    {
        $user = App::$session->getUser();

        if ($user) {
            $forms = [
                'create' => (new ReviewCreateForm())->render(),
            ];

        } else {
            $text = 'Want to leave a review?';
            $links = [
                'register' => (new Link([
                    'url' => App::$router::getUrl('register'),
                    'text' => 'Create an account by pressing here'
                ]))->render()
            ];
        }

        $table = new ReviewTable();

        $content = (new View([
            'title' => 'Read About Us',
            'table' => $table->render(),
            'forms' => $forms ?? [],
            'message' => $text ?? [],
            'links' => $links ?? []
        ]))->render(ROOT . '/app/templates/content/review.tpl.php');

        $this->page->setContent($content);
        return $this->page->render();
    }
}