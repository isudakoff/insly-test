<?php

namespace isudakoff\Insly\Second\Core;

/**
 * Class Controller
 *
 * @property string view_name
 * @property string language
 * @property string page_header
 * @property string title
 *
 * @property View view
 *
 * @package App\Classes
 */
class Controller
{
    public $view_name = 'home';

    public $language = 'en';

    public $page_header = 'Home';

    public $title = 'Home';

    private $view;

    public function __construct()
    {
    }

    public function index()
    {
        return $this->render("{$this->view_name}/index", []);
    }

    protected function getView()
    {
        $this->view = new View($this->title, $this->page_header, $this->language);

        return $this->view;
    }

    public function render(string $view_name, array $data = [], $layout = 'main')
    {
        return $this->getView()->render($view_name, $data, $layout);
    }

    protected function secure_form($form)
    {
        foreach ($form as $key => $value) {
            $form[$key] = $this->secure_input($value);
        }
    }

    private function secure_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
}
