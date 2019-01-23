<?php

namespace isudakoff\Insly\Second\Core;

/**
 * Class Router
 *
 * @package isudakoff\Insly\Second\Core
 */
class Router
{
    public static function parse(Request $request)
    {
        $explode_url = explode('/', $request->getUrl());

        $controller = isset($explode_url[0]) && $explode_url[0] !== '' ? $explode_url[0] : 'home';
        $request->setController($controller);

        $action = isset($explode_url[1]) && $explode_url[1] !== '' ? $explode_url[1] : 'index';
        $request->setAction($action);

        $params = array_slice($explode_url, 2);
        $request->setParams($params);
    }
}
