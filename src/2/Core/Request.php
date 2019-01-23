<?php

namespace isudakoff\Insly\Second\Core;

/**
 * Class Request
 *
 * @package isudakoff\Insly\Second\Core
 */
class Request
{
    protected $url;

    protected $controller;

    protected $action;

    protected $params;

    public function __construct()
    {
        $uri = $this->getURI();

        $this->setUrl($uri);
    }

    protected function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }

        if (!empty($_SERVER['PATH_INFO'])) {
            return trim($_SERVER['PATH_INFO'], '/');
        }

        if (!empty($_SERVER['QUERY_STRING'])) {
            return trim($_SERVER['QUERY_STRING'], '/');
        }

        return '/';
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): Request
    {
        $this->url = trim($url);

        return $this;
    }

    public function setController(string $controller): Request
    {
        $this->controller = ucfirst($controller);

        return $this;
    }

    public function setAction(string $action): Request
    {
        $this->action = $action;

        return $this;
    }

    public function setParams(array $params): Request
    {
        $this->params = $params;

        return $this;
    }

    public function getController(): string
    {
        return $this->controller;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function getParams(): array
    {
        return $this->params;
    }
}
