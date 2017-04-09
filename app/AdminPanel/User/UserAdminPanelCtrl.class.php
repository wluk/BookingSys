<?php

class UserAdminPanel
{
    function GetPersons()
    {
        $table = 'person';
        $page = $_REQUEST['page'] ?: 1;
        $result_per_page = 4;
        if (!isset($page)) {
            $page = 1;
        }

        $starting_limit_number = ($page - 1) * $result_per_page;
        $count = getDB()->count($table);
        $maxPage = ceil($count / $result_per_page);

        $result = getDB()->select($table, "*", ["LIMIT" => [$starting_limit_number, $result_per_page]]);

        getSmarty()->assign('result', $result);
        getSmarty()->assign('page', $maxPage);
        getSmarty()->assign('currentPage', $page);

        $this->generateView('persons');
    }

    function EditUser()
    {
        $idUser = $_REQUEST['id'];
        $existPerson = getDB()->select('person', "*", ["ID" => $idUser])[0];
        if ($existPerson['ID'] == $idUser) {
            if ($existPerson['ROLE'] == 'admin') {
                $tmpType = 'user';
            } else {
                $tmpType = 'admin';
            }
            getDB()->update("person", [
                "ROLE" => $tmpType
            ], [
                "ID" => $idUser
            ]);
            if (null != getDB()->error()[1]) { //jeśli istnieje kod błędu
                getMessages()->addError("Wystąpił błąd podczas aktualizacji rekordu" . getDB()->error()[2]);
            } else {
                getMessages()->addInfo("Pomyślnie uaktualniono rekord");
            }
        } else {
            getMessages()->addError("brak takiej osoby");
        }

        forwardTo('getPerson');
    }

    function DelUser()
    {
        $idUser = $_REQUEST['id'];
        $existPerson = getDB()->select('person', "*", ["ID" => $idUser])[0];
        if ($existPerson['ID' == $idUser]) {
            getDB()->delete('person', ["ID" => $idUser]);
            if (null != getDB()->error()[1]) { //jeśli istnieje kod błędu
                getMessages()->addError("Wystąpił błąd podczas usuwania rekordu" . getDB()->error()[2]);
            } else {
                getMessages()->addInfo("Pomyślnie usunięto rekord");
            }
        } else {
            getMessages()->addError("brak takiej osoby");
        }

        forwardTo('getPerson');
    }

    public function generateView($action)
    {
        getSmarty()->display(getConf()->root_path . "\\app\\AdminPanel\\User\\" . $action . '.html');
    }
}