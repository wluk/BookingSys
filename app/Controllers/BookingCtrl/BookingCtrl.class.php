<?php
require_once getConf()->root_path . '/app/models/VRegistration.class.php';

class BookingCtrl
{
    private $login;
    private $pass;
    private $msg;

    public function getLoginParams()
    {
        $this->login = $_REQUEST ["login"];
        $this->pass = $_REQUEST ["pass"];
    }

    public function getRegParams()
    {
        $this->login = $_REQUEST ['nickname'];
        $this->pass = $_REQUEST ['email'];
        $this->login = $_REQUEST ['p1'];
        $this->pass = $_REQUEST ['p2'];
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
            "user",
            ["Login", "Password"],
            ["Login" => $p_login]);
        foreach ($users as $user) {
            if (password_verify($this->pass, $user['Password'])) {
                $this->generateView('book');
                exit();
            }
        }
        $this->generateView('login');
    }

//GET
    public
    function book()
    {
        $this->generateView('book');
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
        $model = (object)$_POST['VRegistration'];
        if ($this->validFormReg($model)) {
            //insert
            $pass_hash = password_hash($model->pass1, PASSWORD_DEFAULT);
            $_SESSION['hash'] = $pass_hash;

            getDB()->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            getDB()->insert("user", [
                "Login" => $model->nickname,
                "Password" => $pass_hash
            ]);

            $this->generateView('login');
            //exit();
        } else {
            $this->msg = "Błąd";
            $this->generateView('registration');
        }


    }

    private
    function validFormReg($model)
    {
        if (!isset($model)) return false;
        if (!isset($model->nickname) || strlen($model->nickname) == 0) return false;
        if (!isset($model->email) || strlen($model->email) == 0) return false;
        if (!isset($model->pass1) || strlen($model->pass1) == 0) return false;
        if (!isset($model->pass2) || strlen($model->pass1) == 0) return false;
        if (!isset($model->kom) || strlen($model->kom) == 0) return false;
        if ($model->pass1 != $model->pass2) return false;

        return true;

    }

    public
    function generateView($action)
    {
        if (isset($this->msg)) {
            getSmarty()->assign('msg', $this->msg);
        }
        getSmarty()->display(getConf()->root_path . "\\app\\Views\\Booking\\" . $action . '.html');
    }

    public
    function generateHomeView($action)
    {
        getSmarty()->display(getConf()->root_path . "\\app\\Views\\Home\\" . $action . '.html');
    }
}