<?php
/* Smarty version 3.1.30, created on 2017-01-12 13:10:24
  from "C:\xampp\htdocs\Booking\app\Views\Booking\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_587772308ecc89_68128142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d56816e1fd4ef44b3875b12a49df5c06dfb1529' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Booking\\app\\Views\\Booking\\login.html',
      1 => 1484223023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587772308ecc89_68128142 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2340858777230856511_81409356', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16105587772308d20a4_69058384', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("\app\Views\main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'head'} */
class Block_2340858777230856511_81409356 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- All the files that are required -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/css/login-form.css" rel="stylesheet">
<?php
}
}
/* {/block 'head'} */
/* {block 'top'} */
class Block_16105587772308d20a4_69058384 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
    <div class="box">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
            <legend>Logowanie do systemu</legend>
            <fieldset>
                <div class="pure-control-group">
                    <label for="id_login">login: </label>
                    <input id="id_login" type="text" name="login"/>
                </div>
                <div class="pure-control-group">
                    <label for="id_pass">pass: </label>
                    <input id="id_pass" type="password" name="pass"/><br/>
                </div>
                <div class="pure-controls">
                    <input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
                </div>
            </fieldset>
        </form>
    </div>
</div>

<div class="row">
    <div class="box">
        <!-- Where all the magic happens -->
        <!-- LOGIN FORM -->
        <div class="text-center" style="padding:50px 0">
            <div class="logo">Logowanie</div>
            <!-- Main Form -->
            <div class="login-form-1">
                <form id="login-form" class="text-left">
                    <div class="login-form-main-message"></div>
                    <div class="main-login-form">
                        <div class="login-group">
                            <div class="form-group">
                                <label for="lg_username" class="sr-only">Login</label>
                                <input type="text" class="form-control" id="lg_username" name="lg_username"
                                       placeholder="login">
                            </div>
                            <div class="form-group">
                                <label for="lg_password" class="sr-only">Hasło</label>
                                <input type="password" class="form-control" id="lg_password" name="lg_password"
                                       placeholder="hasło">
                            </div>
                            <div class="form-group login-group-checkbox">
                                <input type="checkbox" id="lg_remember" name="lg_remember">
                                <label for="lg_remember">zapamiętj mnie</label>
                            </div>
                        </div>
                        <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                    </div>
                    <div class="etc-login-form">
                        <!--<p>forgot your password? <a href="#">click here</a></p>-->
                        <p>jesteś tu pierwszy raz? <br><a href="#">utwórz konto</a></p>
                    </div>
                </form>
            </div>
            <!-- end:Main Form -->
        </div>

        <!--&lt;!&ndash; REGISTRATION FORM &ndash;&gt;-->
        <!--<div class="text-center" style="padding:50px 0">-->
        <!--<div class="logo">register</div>-->
        <!--&lt;!&ndash; Main Form &ndash;&gt;-->
        <!--<div class="login-form-1">-->
        <!--<form id="register-form" class="text-left">-->
        <!--<div class="login-form-main-message"></div>-->
        <!--<div class="main-login-form">-->
        <!--<div class="login-group">-->
        <!--<div class="form-group">-->
        <!--<label for="reg_username" class="sr-only">Email address</label>-->
        <!--<input type="text" class="form-control" id="reg_username" name="reg_username"-->
        <!--placeholder="username">-->
        <!--</div>-->
        <!--<div class="form-group">-->
        <!--<label for="reg_password" class="sr-only">Password</label>-->
        <!--<input type="password" class="form-control" id="reg_password" name="reg_password"-->
        <!--placeholder="password">-->
        <!--</div>-->
        <!--<div class="form-group">-->
        <!--<label for="reg_password_confirm" class="sr-only">Password Confirm</label>-->
        <!--<input type="password" class="form-control" id="reg_password_confirm"-->
        <!--name="reg_password_confirm" placeholder="confirm password">-->
        <!--</div>-->

        <!--<div class="form-group">-->
        <!--<label for="reg_email" class="sr-only">Email</label>-->
        <!--<input type="text" class="form-control" id="reg_email" name="reg_email"-->
        <!--placeholder="email">-->
        <!--</div>-->
        <!--<div class="form-group">-->
        <!--<label for="reg_fullname" class="sr-only">Full Name</label>-->
        <!--<input type="text" class="form-control" id="reg_fullname" name="reg_fullname"-->
        <!--placeholder="full name">-->
        <!--</div>-->

        <!--<div class="form-group login-group-checkbox">-->
        <!--<input type="radio" class="" name="reg_gender" id="male" placeholder="username">-->
        <!--<label for="male">male</label>-->

        <!--<input type="radio" class="" name="reg_gender" id="female" placeholder="username">-->
        <!--<label for="female">female</label>-->
        <!--</div>-->

        <!--<div class="form-group login-group-checkbox">-->
        <!--<input type="checkbox" class="" id="reg_agree" name="reg_agree">-->
        <!--<label for="reg_agree">i agree with <a href="#">terms</a></label>-->
        <!--</div>-->
        <!--</div>-->
        <!--<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>-->
        <!--</div>-->
        <!--<div class="etc-login-form">-->
        <!--<p>already have an account? <a href="#">login here</a></p>-->
        <!--</div>-->
        <!--</form>-->
        <!--</div>-->
        <!--&lt;!&ndash; end:Main Form &ndash;&gt;-->
        <!--</div>-->

        <!--&lt;!&ndash; FORGOT PASSWORD FORM &ndash;&gt;-->
        <!--<div class="text-center" style="padding:50px 0">-->
        <!--<div class="logo">forgot password</div>-->
        <!--&lt;!&ndash; Main Form &ndash;&gt;-->
        <!--<div class="login-form-1">-->
        <!--<form id="forgot-password-form" class="text-left">-->
        <!--<div class="etc-login-form">-->
        <!--<p>When you fill in your registered email address, you will be sent instructions on how to reset-->
        <!--your password.</p>-->
        <!--</div>-->
        <!--<div class="login-form-main-message"></div>-->
        <!--<div class="main-login-form">-->
        <!--<div class="login-group">-->
        <!--<div class="form-group">-->
        <!--<label for="fp_email" class="sr-only">Email address</label>-->
        <!--<input type="text" class="form-control" id="fp_email" name="fp_email"-->
        <!--placeholder="email address">-->
        <!--</div>-->
        <!--</div>-->
        <!--<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>-->
        <!--</div>-->
        <!--<div class="etc-login-form">-->
        <!--<p>already have an account? <a href="#">login here</a></p>-->
        <!--<p>new user? <a href="#">create new account</a></p>-->
        <!--</div>-->
        <!--</form>-->
        <!--</div>-->
        <!-- end:Main Form -->
    </div>
    <div class="clearfix"></div>
</div>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="hhttps://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/localization/messages_pl.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/js/login-form.js"><?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'top'} */
}
