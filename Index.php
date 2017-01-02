<?php
require_once ('libs/Smarty.class.php');
$smarty = new Smarty ();
$smarty->template_dir = 'Views';
$smarty->compile_dir = 'tmp';
$smarty->cache_dir = 'cache';

$smarty->assign ( 'company', 'Kawka' );

$smarty->display ( 'index.html' )?>