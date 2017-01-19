<?php
/* Smarty version 3.1.30, created on 2017-01-19 22:01:45
  from "C:\xampp\htdocs\Booking\app\Views\Booking\registration.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58812939d02966_87440162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a1663eb188fe3a4d7c18088b297c1a06864f99e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Booking\\app\\Views\\Booking\\registration.html',
      1 => 1484859704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58812939d02966_87440162 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!---->
<!--<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_665858812939a33dd4_75117963', 'head');
?>
-->

<!--<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2433958812939acb701_23682084', 'msg');
?>
-->

<!--<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3003258812939bae5f6_38972135', 'top');
?>
-->


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84158812939c98051_06394431', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2158258812939cedc04_37173024', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("\app\Views\main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("\app\Views\main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'head'} */
class Block_665858812939a33dd4_75117963 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
-->
<!--<?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>-->
<!--<?php
}
}
/* {/block 'head'} */
/* {block 'msg'} */
class Block_2433958812939acb701_23682084 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
-->
<!--<div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>-->
<!--<?php
}
}
/* {/block 'msg'} */
/* {block 'top'} */
class Block_3003258812939bae5f6_38972135 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
-->
<!--<div class="row">-->
<!--<div class="box">-->
<!--<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
regi" method="post">-->
<!--Nickname: <input type="text" name="VRegistration[nickname]"><br>-->
<!--E-mail: <input type="email" name="VRegistration[email]"><br>-->
<!--p1: <input type="password" name="VRegistration[pass1]"><br>-->
<!--p2: <input type="password" name="VRegistration[pass2]"><br>-->
<!--kon: <input type="tel" name="VRegistration[kom]"><br>-->

<!--<input type="checkbox" name="remember"/> reg-->

<!--<div class="g-recaptcha" data-sitekey="6LfyKBIUAAAAALozVE5Fa6JCie2LJoTvoB_gx6Rr"></div>-->

<!--<input type="submit" value="rejestruj">-->
<!--</form>-->
<!--</div>-->
<!--</div>-->

<!--<?php
}
}
/* {/block 'top'} */
/* {block 'head'} */
class Block_84158812939c98051_06394431 extends Smarty_Internal_Block
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
class Block_2158258812939cedc04_37173024 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!--<div class="row">-->
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
    <!--</div>-->
    <!--<div class="clearfix"></div>-->
<!--</div>-->
<!--</div>-->
<!--<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/js/jquery.js"><?php echo '</script'; ?>
>-->
<!--<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"><?php echo '</script'; ?>
>-->
<!--<?php echo '<script'; ?>
 src="hhttps://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/localization/messages_pl.js"><?php echo '</script'; ?>
>-->
<!--<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/js/login-form.js"><?php echo '</script'; ?>
>-->

<?php
}
}
/* {/block 'top'} */
}
