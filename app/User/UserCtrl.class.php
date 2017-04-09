<?php

class UserCtrl
{
    function __construct()
    {
        //session_start();
    }

    public function Route($actionName)
    {
        switch ($actionName) {
            default : //'login GET'
                include_once getConf()->root_path . '\app\User\Sing\SingUserCtrl.class.php';
                $ctrl = new SingUserCtrl();
                $ctrl->LoginGet();
                break;
            case 'login' : //POST
                include_once getConf()->root_path . '\app\User\Sing\SingUserCtrl.class.php';
                $ctrl = new SingUserCtrl();
                $ctrl->LoginPost();
                break;
            case 'logout' :
                include_once getConf()->root_path . '\app\User\Sing\SingUserCtrl.class.php';
                $ctrl = new SingUserCtrl();
                $ctrl->LogOut();
                break;
            case 'registration' :
                include_once getConf()->root_path . '\app\User\Sing\SingUserCtrl.class.php';
                $ctrl = new SingUserCtrl();
                $ctrl->RegistrationGet();
                break;
            case 'regi' :
                include_once getConf()->root_path . '\app\User\Sing\SingUserCtrl.class.php';
                $ctrl = new SingUserCtrl();
                $ctrl->RegistrationPost();
                break;
            case 'showClasses' :
                include_once getConf()->root_path . '\app\User\Classes\ClassesUserCtrl.class.php';
                $ctrl = new ClassesUserCtrl();
                $ctrl->ShowClasses();
                break;
            case 'join' :
                include_once getConf()->root_path . '\app\User\Classes\ClassesUserCtrl.class.php';
                $ctrl = new ClassesUserCtrl();
                $ctrl->JoinClasses();
                break;
            case 'leave' :
                include_once getConf()->root_path . '\app\User\Classes\ClassesUserCtrl.class.php';
                $ctrl = new ClassesUserCtrl();
                $ctrl->LeaveClesses();
                break;
            case 'search' :
                include_once getConf()->root_path . '\app\User\Classes\ClassesUserCtrl.class.php';
                $ctrl = new ClassesUserCtrl();
                $ctrl->Search();
                break;
        }
    }
}