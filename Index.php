<?php
require_once dirname(__FILE__).'/config.php';
require_once ('lib/smarty/Smarty.class.php');

$smarty = new Smarty ();
$smarty->template_dir = 'Views';
$smarty->compile_dir = 'tmp';
$smarty->cache_dir = 'cache';

if (isset($_GET['page']) && $_GET['page']=='about') {
	 $page = 'about';
} elseif (isset($_GET['page']) && $_GET['page']=='blog'){
	 $page = 'blog';
} elseif (isset($_GET['page']) && $_GET['page']=='contact'){
	 $page = 'contact';
}else {
	$page = 'index';
}

$smarty->assign ( 'company', 'Kawka' );
$smarty->assign ( 'page',$page);

print '
 <script type="text/javascript">
      var carnr;
      carnr = "'.$page.'"
      console.log(carnr);
 </script>';

$smarty->display ( 'layout.html' )
?>