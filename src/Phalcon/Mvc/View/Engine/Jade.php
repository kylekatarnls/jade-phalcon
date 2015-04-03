<?php

namespace Phalcon\Mvc\View\Engine;

use Phalcon\Mvc\View\Engine;
use Phalcon\Mvc\View\EngineInterface;

class Jade extends Engine implements EngineInterface
{
    protected $jade;
    protected $view;

    /**
     * Adapter constructor
     *
     * @param \Phalcon\Mvc\View $view
     * @param \Phalcon\DI $di
     */
    public function __construct($view, $di)
    {
        //Initialize here the adapter
        parent::__construct($view, $di);
        $this->jade = new \Jade\Jade();
        $this->view = $view;
    }

    /**
     * Renders a view using the template engine
     *
     * @param string $path
     * @param array $params
     */
    public function render($path, $params, $mustClean = false)
    {
        $content = $this->jade->render($path, $this->view->getParams());
        if($mustClean) {
            $this->view->setContent($content);
        } else {
            echo $content;
        }
    }

}