<?php 

namespace App\HTTP;

class Response
{
    protected $view;

    public function __construct($view)
    {
        $this->view = $view;
    }

    public function send()
    {
        $view = $this->getView();

        $content = file_get_contents(viewPath($view));
        require viewPath('layout');
    }

    /**
     * Getters and Setters
     */

    public function getView()
    {
        return $this->view;
    }


}