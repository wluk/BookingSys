<?php

class HomeCtrl
{
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
        getSmarty()->display(getConf()->root_path . "\\app\\Views\\Home\\" . $action . '.html');
    }
}