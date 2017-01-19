<?php
/* Smarty version 3.1.30, created on 2017-01-19 21:53:06
  from "C:\xampp\htdocs\Booking\app\Views\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58812732626054_44282996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f878278581c4bdf540ab1426fa5337f32a8a1613' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Booking\\app\\Views\\main.html',
      1 => 1484859181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58812732626054_44282996 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Restauracja Hmm...">
    <meta name="author" content="Restauracja Hmm...">
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/icon.ico">

    <title>Restauracja Hmm...</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/css/business-casual.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/css/sticky-footer.css" rel="stylesheet">

    <!-- Fonts -->
    <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
            rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic"
            rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../public/css/sticky-footer.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31905881273248b011_93907648', 'head');
?>

</head>
<body>
<div class="brand">Restauracja Hmm...</div>
<div class="address-bar">3481 Melrose Place | Beverly Hills, CA
    90210 | 123.456.7890
</div>

<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> <span
                    class="icon-bar"></span> <span class="icon-bar"></span> <span
                    class="icon-bar"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class="navbar-brand" href="index.html">Business Casual</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse"
             id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
">Home</a></li>
                <li><a href="?action=about">About</a></li>
                <li><a href="?action=blog">Blog</a></li>
                <li><a href="?action=booking">Rezerwacja</a></li>
                <li><a href="?action=contact">Contact</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
</nav>

<div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29303588127324da6b9_31656211', 'msg');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12004588127325ce8e2_84088861', 'top');
?>

</div>
<!-- /.container -->

<div id="footer">
    <div class="container">
        <p class="text-muted credit">Restauracja Hmm...</p>
    </div>
</div>

<!-- jQuery -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/js/jquery.js"><?php echo '</script'; ?>
>

<!-- Bootstrap Core JavaScript -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- Script to Activate the Carousel -->
<?php echo '<script'; ?>
>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
<?php echo '</script'; ?>
>
</body>
</html>
</html><?php }
/* {block 'head'} */
class Block_31905881273248b011_93907648 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'head'} */
/* {block 'msg'} */
class Block_29303588127324da6b9_31656211 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'msg'} */
/* {block 'top'} */
class Block_12004588127325ce8e2_84088861 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
}
