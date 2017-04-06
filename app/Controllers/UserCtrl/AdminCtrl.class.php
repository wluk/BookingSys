<?php

/**
 * Created by PhpStorm.
 * User: wluka
 * Date: 06.04.2017
 * Time: 23:10
 */
class AdminCtrl
{
    private $page;

    function GetPersons()
    {
        $table = 'person';
        $page = $_REQUEST['page'];
        $result_per_page = 5;
        if (!isset($page)) {
            $page = 1;
        }
        $maxPage = 1;
        $starting_limit_number = ($page - 1) * $result_per_page;
        $count = getDB()->count($table);
        $maxPage = ceil($count / $result_per_page);

        $result = getDB()->select($table, "*", ["LIMIT" => [$starting_limit_number, $result_per_page]]);

        $this->generateView('persons', $result, $maxPage);
    }

    public
    function generateView($action, $returnData, $pages)
    {
        if (isset($this->msg)) {
            getSmarty()->assign('msg', $this->msg);
        }
        getSmarty()->assign('return', $returnData);
        getSmarty()->assign('page', $pages);

        getSmarty()->display(getConf()->root_path . "\\app\\Views\\Admin\\" . $action . '.html');
    }
}