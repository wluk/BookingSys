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
    public function Classes()
    {
        $this->generateView('classes');
    }

    //GET
    public function Contact()
    {
        $this->generateView('contact');
    }

    //GET
    public function Schedule()
    {
        $this->generateView('schedule');
    }

    //GET
    public function Trainer()
    {
        $this->generateView('trainer');
    }

    public function generateView($action)
    {
        getSmarty()->display(getConf()->root_path . "\\app\\Views\\Home\\" . $action . '.html');
    }
}