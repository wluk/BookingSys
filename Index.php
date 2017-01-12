<?php
require_once dirname(__FILE__) . '/init.php';

//przekazanie żądania do obsługi akcji 'home'
$action = getFromRequest('action');
forwardTo($action);