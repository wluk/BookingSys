<?php
require_once dirname(__FILE__) . '/../init.php';

switch ($action) {
    // <editor-fold defaultstate="collapsed" desc="akcje Home">
    case 'home' :
        include_once getConf()->root_path . '\app\Home\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->Index();
        exit();
        break;
    case 'about' :
        include_once getConf()->root_path . '\app\Home\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->About();
        exit();
        break;
    case 'classes' :
        include_once getConf()->root_path . '\app\Home\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->Classes();
        exit();
        break;
    case 'contact' :
        include_once getConf()->root_path . '\app\Home\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->Contact();
        exit();
        break;
    case 'schedule' :
        include_once getConf()->root_path . '\app\Home\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->Schedule();
        exit();
        break;
    case 'trainer' :
        include_once getConf()->root_path . '\app\Home\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->Trainer();
        exit();
        break;
    case 'login' :
        include_once getConf()->root_path . '\app\User\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->Route($action);
        break;
    case 'registration' :
        include_once getConf()->root_path . '\app\User\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->Route($action);
        break;
    case 'regi' :
        include_once getConf()->root_path . '\app\User\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->Route($action);
        break;
    // </editor-fold>
}
include getConf()->root_path . '\app\Security\check.php';

switch ($action) {
    // <editor-fold defaultstate="collapsed" desc="akcje użytkownika">
    default :
        include_once getConf()->root_path . '\app\Home\HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->Index();
        break;
    case 'loginGet' :
        include_once getConf()->root_path . '\app\User\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->Route($action);
        break;
    case 'showClasses' :
        include_once getConf()->root_path . '\app\User\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->Route($action);
        break;
    case 'statute' :
        include_once getConf()->root_path . '\app\User\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->Route($action);
        break;
    case 'logout' :
        include_once getConf()->root_path . '\app\User\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->Route($action);
        break;
    case 'join' :
        include_once getConf()->root_path . '\app\User\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->Route($action);
        break;
    case 'leave' :
        include_once getConf()->root_path . '\app\User\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->Route($action);
        break;
    case 'search' :
        include_once getConf()->root_path . '\app\User\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->Route($action);
        break;
    // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="Panel Administracyjny">
    case 'getPerson' :
        include_once getConf()->root_path . '\app\AdminPanel\AdminPanelCtrl.class.php';
        $ctrl = new AdminPanelCtrl();
        $ctrl->Route($action);
        break;
    case 'deletePerson' :
        include_once getConf()->root_path . '\app\AdminPanel\AdminPanelCtrl.class.php';
        $ctrl = new AdminPanelCtrl();
        $ctrl->Route($action);
        break;
    case 'editPerson' :
        include_once getConf()->root_path . '\app\AdminPanel\AdminPanelCtrl.class.php';
        $ctrl = new AdminPanelCtrl();
        $ctrl->Route($action);
        break;
    case 'showClassesAP' :
        include_once getConf()->root_path . '\app\AdminPanel\AdminPanelCtrl.class.php';
        $ctrl = new AdminPanelCtrl();
        $ctrl->Route($action);
        break;
    case 'addClasses' :
        include_once getConf()->root_path . '\app\AdminPanel\AdminPanelCtrl.class.php';
        $ctrl = new AdminPanelCtrl();
        $ctrl->AddClasses();
        break;
    case 'cancelClasses' :
        include_once getConf()->root_path . '\app\AdminPanel\AdminPanelCtrl.class.php';
        $ctrl = new AdminPanelCtrl();
        $ctrl->Route($action);
        break;
    // </editor-fold>
}