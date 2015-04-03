<?php

use Jade\Jade,
    Phalcon\Mvc\View\Engine,
    Phalcon\Mvc\View\EngineInterface;

class JadePhalcon extends Engine implements EngineInterface
{
    protected $_jade;

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
        $this->_jade = new Jade();
    }

    /**
     * Renders a view using the template engine
     *
     * @param string $path
     * @param array $params
     */
    public function render($path, $params)
    {
        echo $this->_jade->render($path, $this->_view->getParams());
    }

}