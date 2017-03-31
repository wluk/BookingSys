<?php
/* Smarty version 3.1.30, created on 2017-03-31 23:03:26
  from "C:\xampp\htdocs\silka\app\Views\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dec41e274975_69058298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eeed2405bf92d1e6d4759035707fd4e9da5e222' => 
    array (
      0 => 'C:\\xampp\\htdocs\\silka\\app\\Views\\main.html',
      1 => 1490994202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dec41e274975_69058298 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pl">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SILKA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fitness center" />
    <meta name="keywords" content="silka fitness sport" />
    <meta name="author" content="wluk" />

    <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/icon.ico">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/css/superfish.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/css/style.css">


    <!-- Modernizr JS -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/js/modernizr-2.6.2.min.js"><?php echo '</script'; ?>
>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/js/respond.min.js"><?php echo '</script'; ?>
>
	<![endif]-->

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99806562758dec41e267024_30677887', 'head');
?>

</head>

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
            <div id="fh5co-header">
                <header id="fh5co-header-section">
                    <div class="container">
                        <div class="nav-header">
                            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                            <h1 id="fh5co-logo"><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
">SILKA</a></h1>
                            <!-- START #fh5co-menu-wrap -->
                            <nav id="fh5co-menu-wrap" role="navigation">
                                <ul class="sf-menu" id="fh5co-primary-menu">
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
">GŁÓWNA</a>
                                    </li>
                                    <!--<li>
                                        <a href="?action=classes" class="fh5co-sub-ddown">Zajecia</a>
                                        <ul class="fh5co-sub-menu">
                                            <li><a href="#">Body</a></li>
                                            <li><a href="#">Yoga</a></li>
                                            <li><a href="#">Cycling</a></li>
                                            <li><a href="#">Boxing</a></li>
                                            <li><a href="#">Swimming</a></li>
                                            <li><a href="#">Massage</a></li>
                                        </ul>
                                    </li>-->
                                    <li><a href="?action=classes">Zajecia</a></li>
                                    <li><a href="?action=schedule">Harmonogrma</a></li>
                                    <li><a href="?action=trainer">Trenerzy</a></li>
                                    <li><a href="?action=about">O nas</a></li>
                                    <li><a href="?action=contact">Kontakt</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </header>
            </div>
            <!-- end:fh5co-header -->
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13484278258dec41e269f99_25384332', 'hero');
?>



            <div class="container">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97580327558dec41e26bb26_55683313', 'msg');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193798181058dec41e26d661_20454825', 'top');
?>

            </div>

            <!-- fh5co-blog-section -->
            <footer>
                <div id="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 animate-box">
                                <h3 class="section-title">O nas</h3>
                                <p>Klub SILKA wyposażona jest w nowoczesne, wysokiej jakości urządzenia do ćwiczeń siłowych
                                    oraz cardio. Pozwalają one na przeprowadzenie pełnego treningu wszystkich partii mięśniowych.
                                    Dla naszych Gości przygotowaliśmy specjalną ofertę cenową karnetów oraz wejść jednorazowych.</p>
                            </div>

                            <div class="col-md-4 animate-box">
                                <h3 class="section-title">Nasz adres</h3>
                                <ul class="contact-info">
                                    <li><i class="icon-map-marker"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
                                    <li><i class="icon-phone"></i>+ 1235 2355 98</li>
                                    <li><i class="icon-envelope"></i><a href="#">info@silka.com</a></li>
                                    <li><i class="icon-globe2"></i><a href="www.silka.com">www.silka.com</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 animate-box">
                                <h3 class="section-title">Napisz do nas</h3>
                                <form class="contact-form">
                                    <div class="form-group">
                                        <label for="name" class="sr-only">Imie</label>
                                        <input type="name" class="form-control" id="name" placeholder="Imie">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="sr-only">E-mail</label>
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                    <div class="form-group">
                                        <label for="message" class="sr-only">Tekst</label>
                                        <textarea class="form-control" id="message" rows="7" placeholder="Tekst"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Wyślij wiadomość">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row copy-right">
                            <div class="col-md-6 col-md-offset-3 text-center">
                                <p class="fh5co-social-icons">
                                    <a href="#"><i class="icon-twitter2"></i></a>
                                    <a href="#"><i class="icon-facebook2"></i></a>
                                    <a href="#"><i class="icon-instagram"></i></a>
                                    <a href="#"><i class="icon-dribbble2"></i></a>
                                    <a href="#"><i class="icon-youtube"></i></a>
                                </p>
                                <p>Copyright 2016 Free Html5 <a href="#">Fitness</a>. All Rights Reserved. <br>Made with
                                    <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a>                                    / Demo Images:
                                    <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>


        </div>
        <!-- END fh5co-page -->

    </div>
    <!-- END fh5co-wrapper -->

    <!-- jQuery -->


    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- jQuery Easing -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- Waypoints -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/js/jquery.waypoints.min.js"><?php echo '</script'; ?>
>
    <!-- Stellar -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/js/jquery.stellar.min.js"><?php echo '</script'; ?>
>
    <!-- Superfish -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/js/hoverIntent.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/js/superfish.js"><?php echo '</script'; ?>
>

    <!-- Main JS (Do not remove) -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/js/main.js"><?php echo '</script'; ?>
>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122209222658dec41e2736a2_38124986', 'script');
?>

</body>

</html><?php }
/* {block 'head'} */
class Block_99806562758dec41e267024_30677887 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'head'} */
/* {block 'hero'} */
class Block_13484278258dec41e269f99_25384332 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'hero'} */
/* {block 'msg'} */
class Block_97580327558dec41e26bb26_55683313 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'msg'} */
/* {block 'top'} */
class Block_193798181058dec41e26d661_20454825 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'script'} */
class Block_122209222658dec41e2736a2_38124986 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'script'} */
}
