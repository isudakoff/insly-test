<?php

namespace isudakoff\Insly\Second\App\Controllers;

use isudakoff\Insly\Second\Core\Controller;

/**
 * Class ErrorController
 *
 * @property string view_name
 * @property string code
 * @property string message
 * @property array params
 *
 * @package App\Controllers
 */
class ErrorController extends Controller
{
    public $view_name = 'error';

    protected $code;

    protected $message;

    protected $params;

    public function __construct(string $message = 'Not found', string $code = '404', array $params = [])
    {
        $this->message = $message;
        $this->code = $code;
        $this->params = $params;
    }

    public function index()
    {
        return $this->render("{$this->view_name}/index", [
            'code' => $this->code,
            'message' => $this->message,
            'params' => $this->params,
        ], false);
    }
}