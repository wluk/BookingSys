<?php
require_once dirname(__FILE__) . '/init.php';

$action = getFromRequest('action');
forwardTo($action);