<?php

namespace isudakoff\Insly\Second\Core;

/**
 * Class App
 *
 * @property Request request
 *
 * @package isudakoff\Insly\Second\Core
 */
class App
{
    private $request;

    public function dispatch()
    {
        $this->request = new Request();

        Router::parse($this->request);

        $controller = $this->getController();
        $action = $this->getAction($controller);

        return call_user_func_array([$controller, $action], $this->request->getParams());
    }

    protected function getController()
    {
        $name = $this->request->getController() . "Controller";

        $namespace = 'isudakoff\\Insly\\Second\\App\\Controllers\\';
        $name = $namespace . $name;

        $controller = new $name();

        return $controller;
    }

    protected function getAction(Controller $controller)
    {
        $action = $this->request->getAction();

        return method_exists($controller, $action) ? $action : 'index';
    }
}