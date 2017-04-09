<?php
require_once dirname(__FILE__) . '/../init.php';

switch ($action) {
    // <editor-fold defaultstate="collapsed" desc="akcje Home">
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
    // </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="akcje użytkownika">
    case 'loginGet' :
        include_once getConf()->root_path . '\app\User\UserCtrl.class.php';
        $ctrl = new UserCtrl();
        $ctrl->Route($action);
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