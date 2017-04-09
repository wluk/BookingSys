<?php

class ClassesAdminPanelCtrl
{
    function __construct()
    {
    }

    //##AKCJE##

    public function GetClasses()
    {
        if (isset($_SESSION['user_login'])) {
            $page = $_REQUEST['page'] ?: 1;
            $result_per_page = 5;
            if (!isset($page)) {
                $page = 1;
            }
            $starting_limit_number = ($page - 1) * $result_per_page;
            $count = getDB()->count("classes");
            $maxPage = ceil($count / $result_per_page);

            $sql = "SELECT DISTINCT classes.ID_CLASSES, classes.DATE, classes.TYPE, classes.STATUS, trainer.NAME, registry.ID_PERSON FROM classes LEFT JOIN trainer ON classes.ID_TRAINER = trainer.ID_TRAINER LEFT JOIN registry ON classes.ID_CLASSES = registry.ID_CLASSES ORDER BY  classes.DATE,classes.ID_CLASSES LIMIT " . $starting_limit_number . " , " . $result_per_page;

            $query = getDB()->pdo->query($sql);
            $classes = $query->fetchAll();
            if (null != getDB()->error()[1]) { //jeśli istnieje kod błędu
                getMessages()->addError("Wystąpił błąd podczas wczytywania rekordów" . getDB()->error()[2]);
            }

            getSmarty()->assign('page', $maxPage);
            getSmarty()->assign('return', $classes);
            getSmarty()->assign('currentPage', $page);
            $this->generateView('classes');
        } else {
            getMessages()->addInfo('Widok dostępny tylko dla zalogowanych');
            forwardTo('loginGet');
        }
    }

    public function AddClasses()
    {

    }

    public function CancelClasses()
    {
        $idClasses = $_REQUEST['id'];
        $classes = getDB()->select("classes", "STATUS", ["ID_CLASSES" => $idClasses])[0];
        if (isset($classes)) {
            getDB()->update("classes", ["STATUS" => 1], ["ID_CLASSES" => $idClasses]);
            if (null != getDB()->error()[1]) { //jeśli istnieje kod błędu
                getMessages()->addError("Wystąpił błąd podczas wczytywania rekordów" . getDB()->error()[2]);
            }
        }

        forwardTo('showClassesAP');
    }

    public function generateView($action)
    {
        getSmarty()->display(getConf()->root_path . "\\app\\AdminPanel\\Classes\\" . $action . '.html');
    }
}