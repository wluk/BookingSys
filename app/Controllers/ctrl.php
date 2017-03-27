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
//	BookingCtrl
    case 'booking' :
        include_once getConf()->root_path . '\app\Controllers\BookingCtrl\BookingCtrl.class.php';
        $ctrl = new BookingCtrl();
        $ctrl->Login();
        break;
    case 'login' :
        include_once getConf()->root_path . '\app\Controllers\BookingCtrl\BookingCtrl.class.php';
        $ctrl = new BookingCtrl();
        $ctrl->doLogin();
        break;
    case 'reg' :
        include_once getConf()->root_path . '\app\Controllers\BookingCtrl\BookingCtrl.class.php';
        $ctrl = new BookingCtrl();
        $ctrl->registration();
        break;
    case 'regi' :
        include_once getConf()->root_path . '\app\Controllers\BookingCtrl\BookingCtrl.class.php';
        $ctrl = new BookingCtrl();
        $ctrl->doRegistration();
        break;
    case 'book' :
        include_once getConf()->root_path . '\app\Controllers\BookingCtrl\BookingCtrl.class.php';
        $ctrl = new BookingCtrl();
        $ctrl->book();
        break;
//	case 'personDeete' :
//		include_once getConf()->root_path.'/app/person/edit/PersonEditCtrl.class.php';
//		$ctrl = new PersonEditCtrl();
//		$ctrl->processDelete();
//	break;
}
?>