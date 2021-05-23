<?php

namespace App\Controllers;

/**
 * Class Controller
 * @package App\Controllers
 */
abstract class BaseController
{
    /**
     * @var string
     */
    protected string $view;

    /**
     * @var array|null
     */
    protected ?array $params;

    /**
     * @param $view
     * @param $params
     */
    protected function render($view, ?array $params = []): void
    {
        $this->params = $params;
        $this->view = $view;
        require_once "../App/Views/index.phtml";
    }

    protected function content(): void
    {
        $namespace = get_class($this);
        $classController = str_replace('App\\Controllers\\', '', $namespace);
        $class = str_replace('Controller', '', $classController);

        require_once "../App/Views/" . $class . "/" .  $this->view . ".phtml";
    }
}