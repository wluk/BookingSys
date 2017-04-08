<?php
require_once getConf()->root_path . '/app/models/VRegistration.class.php';

class ClassesUserCtrl
{
    private $classesID;
    private $msg;

    function __construct()
    {
        session_start();
    }

    function getClassesIDParam()
    {
        $this->classesID = $_REQUEST ["id"];
    }

    function GetUserRole()
    {
        //session_start();
        $user = getDB()->select(
            "person",
            ["ID", "Login", "ROLE"],
            ["ID" => $_SESSION['identifier']]);

        return $user[0]['ROLE'];
    }

    //GET
    public function JoinClasses()
    {
        $this->getClassesIDParam();
        getDB()->insert("registry", [
            "ID_CLASSES" => $this->classesID,
            "ID_PERSON" => $_SESSION['identifier']
        ]);

        getMessages()->addInfo('Dołączyłeś do zajęć');
        forwardTo('book');
    }

    public function LeaveClesses()
    {
        $this->getClassesIDParam();
        getDB()->delete("registry", [
            "AND" => [
                "ID_CLASSES" => $this->classesID,
                "ID_PERSON" => $_SESSION['identifier']
            ]
        ]);

        getMessages()->addInfo('Wypisano z zajęć');
        forwardTo('book');
    }

    public
    function generateView($action)
    {
        if (isset($this->msg)) {
            getSmarty()->assign('msg', $this->msg);
        }
        getSmarty()->display(getConf()->root_path . "\\app\\User\\" . $action . '.html');
    }

    public
    function generateViewWithData($action, $returnData)
    {
        getSmarty()->assign('return', $returnData);
        getSmarty()->display(getConf()->root_path . "\\app\\User\\" . $action . '.html');
    }

    public
    function generateHomeView($action)
    {
        getSmarty()->display(getConf()->root_path . "\\app\\Home\\" . $action . '.html');
    }
}