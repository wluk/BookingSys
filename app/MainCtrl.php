<?php
require_once dirname(__FILE__) . '/../init.php';

switch ($action) {
    //  HomeCtrl
    default : // 'home'
        include_once getConf()->root_path . '\app\Home\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->Index();
        break;
    case 'about' :
        include_once getConf()->root_path . '\app\Home\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->About();
        break;
    case 'classes' :
        include_once getConf()->root_path . '\app\Home\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->Classes();
        break;
    case 'contact' :
        include_once getConf()->root_path . '\app\Home\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->Contact();
        break;
    case 'schedule' :
        include_once getConf()->root_path . '\app\Home\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->Schedule();
        break;
    case 'trainer' :
        include_once getConf()->root_path . '\app\Home\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->Trainer();
        break;
    //	Rejestracja
    case 'booking' :
        include_once getConf()->root_path . '\app\User\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->Login();
        break;
    case 'login' :
        include_once getConf()->root_path . '\app\User\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->doLogin();
        break;
    case 'reg' :
        include_once getConf()->root_path . '\app\User\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->registration();
        break;
    case 'regi' :
        include_once getConf()->root_path . '\app\User\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->doRegistration();
        break;
    case 'book' :
        include_once getConf()->root_path . '\app\User\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->book();
        break;
    case 'statute' :
        include_once getConf()->root_path . '\app\User\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->registration();
        break;
    case 'logout' :
        include_once getConf()->root_path . '\app\User\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->LogOut();
        break;
    // Akcje zajec
    case 'join' :
        include_once getConf()->root_path . '\app\User\ActionCtrl.class.php';
        $ctrl = new ActionCtrl();
        $ctrl->JoinClasses();
        break;
    case 'leave' :
        include_once getConf()->root_path . '\app\User\ActionCtrl.class.php';
        $ctrl = new ActionCtrl();
        $ctrl->LeaveClesses();
        break;
    //Admin
    case 'person' :
        include_once getConf()->root_path . '\app\AdminPanel\AdminCtrl.class.php';
        $ctrl = new AdminCtrl();
        $ctrl->GetPersons();
        break;
    case 'editUser' :
        include_once getConf()->root_path . '\app\AdminPanel\AdminCtrl.class.php';
        $ctrl = new AdminCtrl();
        $ctrl->EditUser();
        break;
    case 'delUser' :
        include_once getConf()->root_path . '\app\AdminPanel\AdminCtrl.class.php';
        $ctrl = new AdminCtrl();
        $ctrl->DelUser();
        break;
}
?>