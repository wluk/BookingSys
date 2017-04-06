<?php
require_once getConf()->root_path . '/app/models/VRegistration.class.php';

class ActionCtrl
{
    private $classesID;
    private $msg;

    function getClassesIDParam()
    {
        $this->classesID = $_REQUEST ["id"];
    }

    function GetUserRole()
    {
        session_start();
        $user = getDB()->select(
            "person",
            ["ID", "Login", "ROLE"],
            ["ID" => $_SESSION['identifier']]);

        return $user[0]['ROLE'];
    }

    //GET
    public function JoinClasses()
    {
        if ($this->GetUserRole() == 'user') {
           // $this->generateView('user');
            forwardTo('person');
        } else {
            $this->getClassesIDParam();
            getDB()->insert("registry",[
                "ID_CLASSES" => $this->classesID,
               "ID_PERSON" => $_SESSION['identifier']
            ]);
            $this->generateView('user');
        }
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