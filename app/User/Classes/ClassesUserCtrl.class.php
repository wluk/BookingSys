<?php

class ClassesUserCtrl
{
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
            ["ID", "LoginGet", "ROLE"],
            ["ID" => $_SESSION['identifier']]);

        return $user[0]['ROLE'];
    }

    //##AKCJE##

    //GET
    public function Search()
    {
        $search = $_REQUEST['search'];
        if (isset($search)) {
            $page = $_REQUEST['page'] ?: 1;
            $result_per_page = 5;
            if (!isset($page)) {
                $page = 1;
            }
            $starting_limit_number = ($page - 1) * $result_per_page;

            $sql2 = "SELECT count(*) as ile FROM classes LEFT JOIN trainer ON classes.ID_TRAINER = trainer.ID_TRAINER LEFT JOIN registry ON classes.ID_CLASSES = registry.ID_CLASSES WHERE classes.TYPE like '" . $search . "' OR trainer.NAME like '" . $search . "'";

            $query2 = getDB()->pdo->query($sql2);
            $count2 = $query2->fetchAll();

            //$count = getDB()->count("classes");
            $count = $count2[0]['ile'];
            $maxPage = ceil($count / $result_per_page);

            $sql = "SELECT DISTINCT classes.ID_CLASSES, classes.DATE, classes.TYPE, classes.STATUS, trainer.NAME, registry.ID_PERSON FROM classes LEFT JOIN trainer ON classes.ID_TRAINER = trainer.ID_TRAINER LEFT JOIN registry ON classes.ID_CLASSES = registry.ID_CLASSES WHERE classes.TYPE like '" . $search . "' OR trainer.NAME like '" . $search . "' ORDER BY  classes.DATE,classes.ID_CLASSES LIMIT " . $starting_limit_number . " , " . $result_per_page;

            $query = getDB()->pdo->query($sql);
            $classes = $query->fetchAll();
            if (null != getDB()->error()[1]) { //jeśli istnieje kod błędu
                getMessages()->addError("Wystąpił błąd podczas wczytywania rekordów" . getDB()->error()[2]);
            }

            getSmarty()->assign('page', $maxPage);
            getSmarty()->assign('return', $classes);
            getSmarty()->assign('currentPage', $page);

            $_SESSION['search'] = $search;
            $this->generateView('classes');
        } else {
            getMessages()->addInfo('Widok dostępny tylko dla zalogowanych');
            forwardTo('loginGet');
        }

        redirectTo('showClasses');
    }

    public function ShowClasses()
    {
        //session_unset(); //LogOut --force :)
        $fromSearch = $_REQUEST['seek'];
        if (isset($fromSearch)) {
            $_REQUEST['search'] = $_SESSION['search'];
            $this->Search();
        }
        if (isset($_SESSION['user_login'])) {
            unset($_SESSION['search']);
//            $classes = getDB()->select("classes", [
//                //join
//                "[>]trainer" => ["ID_TRAINER" => "ID_TRAINER"],
//                "[>]registry" => ["ID_CLASSES" => "ID_CLASSES"],
//            ],
//                [
//                    //columns
//                    "classes.ID_CLASSES",
//                    "classes.DATE",
//                    "classes.TYPE",
//                    "trainer.NAME",
//                    "registry.ID_PERSON"
//                ],
//                [
//                    "ORDER" => ["classes.DATE", "classes.ID_CLASSES"]
//                ]
//            );

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

    //GET
    public function JoinClasses()
    {
        $this->getClassesIDParam();
        getDB()->insert("registry", [
            "ID_CLASSES" => $this->classesID,
            "ID_PERSON" => $_SESSION['identifier']
        ]);


        redirectTo('showClasses');
        getMessages()->addInfo('Dołączyłeś do zajęć');
    }

    //GET
    public function LeaveClesses()
    {
        $this->getClassesIDParam();
        getDB()->delete("registry", [
            "AND" => [
                "ID_CLASSES" => $this->classesID,
                "ID_PERSON" => $_SESSION['identifier']
            ]
        ]);

        redirectTo('showClasses');
        getMessages()->addInfo('Wypisano z zajęć');
    }

    public function generateView($action)
    {
        getSmarty()->display(getConf()->root_path . "\\app\\User\\Classes\\" . $action . '.html');
    }
}