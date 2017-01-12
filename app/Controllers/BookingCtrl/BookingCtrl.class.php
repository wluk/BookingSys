<?php

class BookingCtrl
{
    private $login;
    private $pass;

    public function getParams()
    {
        $this->login = $_REQUEST ['login'];
        $this->pass = $_REQUEST ['pass'];
    }

    public function validate() {
        // sprawdzenie, czy parametry zostały przekazane
        if (! (isset ( $this->login ) && isset ( $this->pass ))) {
            // sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
            $this->msgs->addError('Błędne wywołanie aplikacji !');
        }

        // nie ma sensu walidować dalej, gdy brak parametrów
        if (! $this->msgs->isError ()) {

            // sprawdzenie, czy potrzebne wartości zostały przekazane
            if ($this->login == "") {
                $this->msgs->addError ( 'Nie podano loginu' );
            }
            if ($this->pass == "") {
                $this->msgs->addError ( 'Nie podano hasła' );
            }
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (! $this->msgs->isError ()) {

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

        return ! $this->msgs->isError ();
    }

    //GET
    public function Login()
    {
        $this->generateView('login');
    }

    //POST
    public function doLogin()
    {
        $this->getParams();
        $this->generateView();
    }

    public function generateView($action)
    {
        getSmarty()->display(getConf()->root_path . "\\app\\Views\\Booking\\" . $action . '.html');
    }
}