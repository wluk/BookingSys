<?php
require_once dirname(__FILE__) . '/../../init.php';
// Po załadowaniu skryptu 'init.php' w całej aplikacji dostępne są obiekty:
// konfiguracji, smarty, messages oraz bazy danych Medoo (Smarty i Medoo ładowane i tworzone w momencie pierwszego użycia)
// za pomocą funkcji: getConf(), getSmarty(), getMessages() oraz getDB()
// Jest również dostępna zmienna $action inicjowana z parametru żądania

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
    case 'blog' :
        include_once getConf()->root_path . '\app\Controllers\HomeCtrl\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->Blog();
        break;
    case 'contact' :
        include_once getConf()->root_path . '\app\Controllers\HomeCtrl\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->Contact();
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
//	case 'personDelete' :
//		include_once getConf()->root_path.'/app/person/edit/PersonEditCtrl.class.php';
//		$ctrl = new PersonEditCtrl();
//		$ctrl->processDelete();
//	break;
}
?>