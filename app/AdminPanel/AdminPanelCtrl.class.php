<?php

class AdminPanelCtrl
{
    private $result;
    private $maxPage;

    function GetPersons()
    {
        $table = 'person';
        $page = $_REQUEST['page'] ?: 1;
        $result_per_page = 5;
        if (!isset($page)) {
            $page = 1;
        }
        $this->maxPage = 1;
        $starting_limit_number = ($page - 1) * $result_per_page;
        $count = getDB()->count($table);
        $this->maxPage = ceil($count / $result_per_page);

        $this->result = getDB()->select($table, "*", ["LIMIT" => [$starting_limit_number, $result_per_page]]);

        $this->generateView('persons');
    }

    function EditUser()
    {
    }

    function DelUser()
    {
        $idUser = $_REQUEST['id'];
        getDB()->delete('person', ["ID" => $idUser]);
        if (null != getDB()->error()[1]) { //jeśli istnieje kod błędu
            getMessages()->addError("Wystąpił błąd podczas usuwania rekordu" . getDB()->error()[2]);
        } else {
            getMessages()->addInfo("Pomyślnie usunięto rekord");
        }

        forwardTo('person');
    }

    public
    function generateView($action)
    {
        getSmarty()->assign('return', $this->result);
        getSmarty()->assign('page', $this->maxPage);

        getSmarty()->display(getConf()->root_path . "\\app\\Admin\\" . $action . '.html');
    }
}