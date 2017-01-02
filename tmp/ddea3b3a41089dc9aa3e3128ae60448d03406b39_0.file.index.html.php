<?php
/* Smarty version 3.1.31, created on 2017-01-02 11:20:13
  from "C:\xampp\htdocs\BookingSys\Views\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_586a295dee4c25_00472031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddea3b3a41089dc9aa3e3128ae60448d03406b39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BookingSys\\Views\\index.html',
      1 => 1483352412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:start.html' => 1,
  ),
),false)) {
function content_586a295dee4c25_00472031 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kawiarnia Kawka">
    <meta name="author" content="Kawka">

    <title>Kawiarnia - Kawka</title>

    <!-- Bootstrap Core CSS -->
    <link href="Views/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="Views/css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

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

</head>
<body>
    <div class="brand">Kawka</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/BookingSys/index.php">Home</a>
                    </li>
                    <li>
                        <a href="Views/about.html">About</a>
                    </li>
                    <li>
                        <a href="Views/blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="Views/contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

<!--
		<?php $_smarty_tpl->_subTemplateRender("file:start.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

-->
    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="Views/js/jquery.js"><?php echo '</script'; ?>
>

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="Views/js/bootstrap.min.js"><?php echo '</script'; ?>
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
</html><?php }
}
