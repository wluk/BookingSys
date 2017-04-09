<?php

class AdminPanelCtrl
{
    function __construct()
    {
        session_start();
    }

    public function Route($actionName)
    {
        switch ($actionName) {
            default : //'getPerson'
                include_once getConf()->root_path . '\app\AdminPanel\User\UserAdminPanelCtrl.class.php';
                $ctrl = new UserAdminPanel();
                $ctrl-> GetPersons();
                break;
            case 'deletePerson' :
                include_once getConf()->root_path . '\app\AdminPanel\User\UserAdminPanelCtrl.class.php';
                $ctrl = new UserAdminPanel();
                $ctrl-> DelUser();
                break;
            case 'editPerson' :
                include_once getConf()->root_path . '\app\AdminPanel\User\UserAdminPanelCtrl.class.php';
                $ctrl = new UserAdminPanel();
                $ctrl-> EditUser();
                break;
            case 'showClassesAP' :
                include_once getConf()->root_path . '\app\AdminPanel\Classes\ClassesAdminPanelCtrl.class.php';
                $ctrl = new ClassesAdminPanelCtrl();
                $ctrl->GetClasses();
                break;
            case 'addClasses' :
                include_once getConf()->root_path . '\app\AdminPanel\Classes\ClassesAdminPanelCtrl.class.php';
                $ctrl = new ClassesAdminPanelCtrl();
                $ctrl->AddClasses();
                break;
            case 'cancelClasses' :
                include_once getConf()->root_path . '\app\AdminPanel\Classes\ClassesAdminPanelCtrl.class.php';
                $ctrl = new ClassesAdminPanelCtrl();
                $ctrl->CancelClasses();
                break;
        }
    }
}