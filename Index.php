<?php
require_once dirname(__FILE__) . '/init.php';

session_start();

$action = getFromRequest('action');
forwardTo($action);