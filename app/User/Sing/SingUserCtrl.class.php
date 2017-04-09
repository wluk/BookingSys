<?php
require_once getConf()->root_path . '/app/User/Sing/RegistrationModel.class.php';

class SingUserCtrl
{
    private $login;
    private $pass;
    private $msg;
    private $model;

    function __construct()
    {
        session_start();
    }

    private function validFormReg()
    {
        if (!isset($this->model)) return false;
        if (!isset($this->model->email) || strlen($this->model->email) == 0) return false;
        if (!isset($this->model->pass1) || strlen($this->model->pass1) == 0) return false;
        if (!isset($this->model->pass2) || strlen($this->model->pass1) == 0) return false;
        if ($this->model->pass1 != $this->model->pass2) return false;
        if (!isset($this->model->name) || strlen($this->model->name) == 0) return false;
        if (!isset($this->model->surname) || strlen($this->model->surname) == 0) return false;
        if (!isset($this->model->phone) || strlen($this->model->phone) == 0) return false;

        return true;
    }

    public function getLoginParams()
    {
        $this->login = $_REQUEST ["login"];
        $this->pass = $_REQUEST ["pass"];
    }

    public function getRegParams()
    {
        $user = new Registration();
        $user->email = $_REQUEST["email"];
        $user->pass1 = $_REQUEST["pass1"];
        $user->pass2 = $_REQUEST["pass2"];
        $user->name = $_REQUEST["name"];
        $user->surname = $_REQUEST["surname"];
        $user->phone = $_REQUEST["phone"];

        $this->model = $user;
    }

    //##AKCJE##

    //GET
    public function LogOut()
    {
        //session_start();
        session_unset();
        //$_SESSION['isLoged'] = false;
        redirectTo('home');
    }

    //GET
    public function LoginGet()
    {
        //session_start();
        $this->generateView('login');
    }

    //POST
    public function LoginPost()
    {
        //session_start();
        $this->getLoginParams();

        $p_login = htmlentities($this->login, ENT_QUOTES, "UTF-8");
        $users = getDB()->select(
            "person",
            "*",
            ["LOGIN" => $p_login]);
        if (null != getDB()->error()[1]) { //jeśli istnieje kod błędu
            getMessages()->addError("Wystąpił błąd podczas wczytywania rekordów" . getDB()->error()[2]);
        } else {
            foreach ($users as $user) {
                if (password_verify($this->pass, $user['PASSWORD'])) {
                    $_SESSION['user_login'] = $user['LOGIN'];
                    $_SESSION['identifier'] = $user['ID'];
                    $_SESSION['user_role'] = $user['ROLE'];
                    $_SESSION['isLoged'] = true;

                    if (isset($user['Role']) && $user['Role'] == 'admin') {
                        redirectTo('showClassesAP');
                    } else {
                        redirectTo('showClasses');
                    }
                    exit();
                }
            }
        }

        getMessages()->addInfo('Coś poszło nie tak');
        forwardTo('loginGet');
    }

    //GET
    public function RegistrationGet()
    {
        $this->generateView('registration');
    }

    //GET
    public function RegistrationPost()
    {
        $this->getRegParams();
        if ($this->validFormReg()) {
            $pass_hash = password_hash($this->model->pass1, PASSWORD_DEFAULT);
            getDB()->insert("person", [
                "LOGIN" => $this->model->email,
                "PASSWORD" => $pass_hash,
                "NAME" => $this->model->name,
                "SURNAME" => $this->model->surname,
                "PHONE" => $this->model->phone
            ]);
            if (null != getDB()->error()[1]) { //jeśli istnieje kod błędu
                getMessages()->addError("Wystąpił błąd podczas wczytywania rekordów" . getDB()->error()[2]);
                forwardTo('registration');
            } else {
                redirectTo('loginGet');
            }
        } else {

            getMessages()->addInfo('Coś poszło nie tak');
            forwardTo('registration');
        }
    }

    public function generateView($action)
    {
        getSmarty()->display(getConf()->root_path . "\\app\\User\\Sing\\" . $action . '.html');
    }
}