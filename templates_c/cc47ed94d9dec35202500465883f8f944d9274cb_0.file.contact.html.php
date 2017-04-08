<?php
/* Smarty version 3.1.30, created on 2017-04-08 14:22:46
  from "C:\xampp\htdocs\silka\app\Home\contact.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e8d61633cdf6_39216215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc47ed94d9dec35202500465883f8f944d9274cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\silka\\app\\Home\\contact.html',
      1 => 1491653995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e8d61633cdf6_39216215 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193577349658e8d6162aed21_42641176', 'hero');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73001974558e8d6162e8bb5_68438339', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201140745058e8d616327006_34061285', 'script');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("\public\main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'hero'} */
class Block_193577349658e8d6162aed21_42641176 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="fh5co-parallax" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/home-image-3.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                <div class="fh5co-intro fh5co-table-cell animate-box">
                    <h1 class="text-center">Pozostańmy w kontakcie</h1>
                    <p>masz pytanie zadzwoń lub napisz</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end: fh5co-parallax -->
<?php
}
}
/* {/block 'hero'} */
/* {block 'top'} */
class Block_73001974558e8d6162e8bb5_68438339 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="fh5co-contact">
    <div class="container">
        <form action="#">
            <div class="row">
                <div class="col-md-6 animate-box">
                    <h3 class="section-title">Nasz adres</h3>
                    <ul class="contact-info">
                        <li><i class="icon-location-pin"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
                        <li><i class="icon-phone2"></i>+ 1235 2355 98</li>
                        <li><i class="icon-mail"></i><a href="#">info@yoursite.com</a></li>
                        <li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li>
                    </ul>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Imie">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="" class="form-control" id="" cols="30" rows="7"
                                          placeholder="Tekst"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Wyslij" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- END fh5co-contact -->
<div id="map" class="fh5co-map"></div>
<!-- END map -->
<?php
}
}
/* {/block 'top'} */
/* {block 'script'} */
class Block_201140745058e8d616327006_34061285 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<!-- Google Map -->
	<?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/js/google_map.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'script'} */
}
