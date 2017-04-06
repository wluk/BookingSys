<?php
require_once getConf()->root_path . '/app/models/VRegistration.class.php';

class UserCtrl
{
    private $login;
    private $pass;
    private $msg;
    private $model;

    public function getLoginParams()
    {
        $this->login = $_REQUEST ["login"];
        $this->pass = $_REQUEST ["pass"];
    }

    public function getRegParams()
    {
        $user = new VRegistration();
        $user->email = $_REQUEST["email"];
        $user->pass1 = $_REQUEST["pass1"];
        $user->pass2 = $_REQUEST["pass2"];
        $user->name = $_REQUEST["name"];
        $user->surname = $_REQUEST["surname"];
        $user->phone = $_REQUEST["phone"];

        $this->model = $user;
    }

    public function validate()
    {
        // sprawdzenie, czy parametry zostały przekazane
        if (!(isset ($this->login) && isset ($this->pass))) {
            // sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
            $this->msgs->addError('Błędne wywołanie aplikacji !');
        }

        // nie ma sensu walidować dalej, gdy brak parametrów
        if (!$this->msgs->isError()) {

            // sprawdzenie, czy potrzebne wartości zostały przekazane
            if ($this->login == "") {
                $this->msgs->addError('Nie podano loginu');
            }
            if ($this->pass == "") {
                $this->msgs->addError('Nie podano hasła');
            }
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (!$this->msgs->isError()) {

            // sprawdzenie, czy dane logowania poprawne
            // (takie informacje najczęściej przechowuje się w bazie danych)
            if ($this->login == "admin" && $this->pass == "admin") {
                session_start();
                $user = new User($this->login, 'admin');
                $_SESSION['user_login'] = $user->login;
                $_SESSION['user_role'] = $user->role;
            } else if ($this->login == "user" && $this->pass == "user") {
                session_start();
                $user = new User($this->login, 'user');
                $_SESSION['user_login'] = $user->login;
                $_SESSION['user_role'] = $user->role;
            } else {
                $this->msgs->addError('Niepoprawny login lub hasło');
            }
        }

        return !$this->msgs->isError();
    }

    //GET
    public function LogOut()
    {
        session_unset();
        $this->generateHomeView('index');
    }

    //GET
    public function Login()
    {
        $this->generateView('login');
    }

    //POST
    public function doLogin()
    {
        $this->getLoginParams();

        $p_login = htmlentities($this->login, ENT_QUOTES, "UTF-8");
        $users = getDB()->select(
            "person",
            ["Login", "Password"],
            ["Login" => $p_login]);
        foreach ($users as $user) {
            if (password_verify($this->pass, $user['Password'])) {
//                $this->generateView('user');

                session_start();
                $_SESSION['user_login'] = $user['Login'];

                $this->book();
                exit();
            }
        }
        $this->generateView('login');
    }

//GET
    public
    function book()
    {
        if (isset($_SESSION['user_login'])) {

            $classes = getDB()->select("classes", [
                //join
                "[>]trainer" => ["ID_TRAINER" => "ID_TRAINER"],
                "[>]registry" => ["ID_CLASSES" => "ID_CLASSES"]
            ],
                [
                    //columns
                    "classes.ID_CLASSES",
                    "classes.DATE",
                    "classes.TYPE",
                    "trainer.NAME",
                    "registry.ID_PERSON"
                ],
                [
                    "ORDER" => ["classes.DATE"]
                ]
            );

            $this->generateViewWithData('user', $classes);
        }
        else
        {
            $this->msg ='Jesteś nie zalogowany';
            $this->generateView('login');
        }
    }

//GET
    public
    function registration()
    {
        $this->generateView('registration');
    }

//GET
    public
    function doRegistration()
    {
        $this->getRegParams();
        if ($this->validFormReg()) {
            $pass_hash = password_hash($this->model->pass1, PASSWORD_DEFAULT);
            $xyz = getDB()->insert("person", [
                "LOGIN" => $this->model->email,
                "PASSWORD" => $pass_hash,
                "NAME" => $this->model->name,
                "SURNAME" => $this->model->surname,
                "PHONE" => $this->model->phone
            ]);

            $this->generateView('login');
        } else {
            $this->msg = "Błąd";
            $this->generateView('registration');
        }
    }

    private
    function validFormReg()
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

    public
    function generateView($action)
    {
        if (isset($this->msg)) {
            getSmarty()->assign('msg', $this->msg);
        }
        getSmarty()->display(getConf()->root_path . "\\app\\Views\\User\\" . $action . '.html');
    }

    public
    function generateViewWithData($action, $returnData)
    {
        $this->msg = "Błąd";

        if (isset($this->msg)) {
            getSmarty()->assign('msg', $this->msg);
        }

        getSmarty()->assign('return', $returnData);
        getSmarty()->display(getConf()->root_path . "\\app\\Views\\User\\" . $action . '.html');
    }

    public
    function generateHomeView($action)
    {
        getSmarty()->display(getConf()->root_path . "\\app\\Views\\Home\\" . $action . '.html');
    }
}