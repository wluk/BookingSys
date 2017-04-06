<?php
require_once dirname(__FILE__) . '/../../init.php';

switch ($action) {
    //  HomeCtrl
    default : // 'home'
        include_once getConf()->root_path . '\app\Controllers\HomeCtrl\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->Index();
        break;
    case 'about' :
        include_once getConf()->root_path . '\app\Controllers\HomeCtrl\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->About();
        break;
    case 'classes' :
        include_once getConf()->root_path . '\app\Controllers\HomeCtrl\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->Classes();
        break;
    case 'contact' :
        include_once getConf()->root_path . '\app\Controllers\HomeCtrl\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->Contact();
        break;
    case 'schedule' :
        include_once getConf()->root_path . '\app\Controllers\HomeCtrl\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->Schedule();
        break;
    case 'trainer' :
        include_once getConf()->root_path . '\app\Controllers\HomeCtrl\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->Trainer();
        break;
    //	Rejestracja
    case 'booking' :
        include_once getConf()->root_path . '\app\Controllers\UserCtrl\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->Login();
        break;
    case 'login' :
        include_once getConf()->root_path . '\app\Controllers\UserCtrl\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->doLogin();
        break;
    case 'reg' :
        include_once getConf()->root_path . '\app\Controllers\UserCtrl\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->registration();
        break;
    case 'regi' :
        include_once getConf()->root_path . '\app\Controllers\UserCtrl\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->doRegistration();
        break;
    case 'book' :
        include_once getConf()->root_path . '\app\Controllers\UserCtrl\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->book();
        break;
    case 'statute' :
        include_once getConf()->root_path . '\app\Controllers\UserCtrl\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->registration();
        break;
    case 'logout' :
        include_once getConf()->root_path . '\app\Controllers\UserCtrl\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->LogOut();
        break;
        // Akcje
    case 'join' :
        include_once getConf()->root_path . '\app\Controllers\UserCtrl\ActionCtrl.class.php';
        $ctrl = new ActionCtrl();
        $ctrl->JoinClasses();
        break;
    //Admin
    case 'person' :
        include_once getConf()->root_path . '\app\Controllers\UserCtrl\AdminCtrl.class.php';
        $ctrl = new AdminCtrl();
        $ctrl->GetPersons();
        break;
    //	case 'personDeete' :
    //		include_once getConf()->root_path.'/app/person/edit/PersonEditCtrl.class.php';
    //		$ctrl = new PersonEditCtrl();
    //		$ctrl->processDelete();
    //	break;
}
?>