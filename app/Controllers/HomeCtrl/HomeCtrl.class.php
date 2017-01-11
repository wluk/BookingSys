<?php

class HomeCtrl
{
    private $path;

    public function __construct()
    {
        $this->path = getConf()->view_element_path;
    }

    //GET
    public function Index()
    {
        $this->generateView('index');
    }

    //GET
    public function About()
    {
        $this->generateView('about');
    }

    //GET
    public function Blog()
    {
        $this->generateView('blog');
    }

    //GET
    public function Contact()
    {
        $this->generateView('contact');
    }

    /**
     * @param $action
     */
    public function generateView($action)
    {
        getSmarty()->assign('path', $this->path);

        getSmarty()->display(getConf()->root_path . "\\app\\Views\\Home\\" . $action . '.html');
    }
}