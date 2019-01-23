<?php

namespace isudakoff\Insly\Second\Core;

use Exception;
use Throwable;

/**
 * Class View
 *
 * @property string title
 * @property string page_header
 * @property string language
 *
 * @package isudakoff\Insly\Second\Core
 */
class View
{
    protected $title;

    protected $page_header;

    protected $language;

    public function __construct(string $title = 'Home', string $page_header = 'Home', string $language = 'en')
    {
        $this->title = $title;
        $this->language = $language;
        $this->page_header = $page_header;
    }

    public function render(string $view_name, array $data = [], $layout = 'main')
    {
        $view_name = mb_strtolower($view_name);
        $view_path = "App/Views/{$view_name}.php";

        $content = $this->evaluatePath($view_path, $data);

        if ($layout === false) {
            return $content;
        }

        return $this->evaluatePath("App/Views/layouts/{$layout}.php", array_merge([
            'title' => $this->title,
            'page_header' => $this->page_header,
            'language' => $this->language,
        ], $data, [
            'content' => $content,
        ]));
    }

    protected function evaluatePath($path, $data = [])
    {
        $obLevel = ob_get_level();

        ob_start();

        extract($data, EXTR_SKIP);

        try {
            require_once ROOT . $path;
        } catch (Exception $e) {
            $this->handleViewException($e, $obLevel);
        } catch (Throwable $e) {
            $this->handleViewException($e, $obLevel);
        }

        return ltrim(ob_get_clean());
    }

    /**
     * Handle a view exception.
     *
     * @param  Exception  $e
     * @param  int  $obLevel
     *
     * @return void
     *
     * @throws Exception
     */
    protected function handleViewException(Exception $e, $obLevel)
    {
        while (ob_get_level() > $obLevel) {
            ob_end_clean();
        }

        throw $e;
    }
}
