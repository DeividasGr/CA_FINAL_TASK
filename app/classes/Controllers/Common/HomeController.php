<?php

namespace App\Controllers\Common;

use App\Views\BasePage;
use Core\View;


class HomeController
{
    protected $page;

    public function __construct()
    {
        $this->page = new BasePage([
            'title' => 'Health & Fitness'
        ]);
    }

    /**
     * Home Controller Index
     *
     * @return string|null
     * @throws \Exception
     */
    public function index(): ?string
    {
        $content = (new View([
            'title' => 'Unleash your inner athlete',
            'forms' => $forms ?? [],
            'links' => $links ?? []
        ]))->render(ROOT . '/app/templates/content/index.tpl.php');

        $this->page->setContent($content);

        return $this->page->render();
    }
}

