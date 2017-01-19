<?php
/* Smarty version 3.1.30, created on 2017-01-19 21:11:55
  from "C:\xampp\htdocs\Booking\app\Views\Home\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58811d8b07cba6_59592067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad181bc07588f73bd90fecee94678113d7281507' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Booking\\app\\Views\\Home\\index.html',
      1 => 1484666763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58811d8b07cba6_59592067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2517458811d8b06c518_52572903', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("\app\Views\main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'top'} */
class Block_2517458811d8b06c518_52572903 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
    <div class="box">
        <div class="col-lg-12 text-center">
            <div id="carousel-example-generic" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators hidden-xs">
                    <li data-target="#carousel-example-generic" data-slide-to="0"
                        class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="img-responsive img-full" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/slide-1.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="img-responsive img-full" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/slide-2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="img-responsive img-full" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/slide-3.jpg" alt="">
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic"
                   data-slide="prev"> <span class="icon-prev"></span>
                </a> <a class="right carousel-control" href="#carousel-example-generic"
                        data-slide="next"> <span class="icon-next"></span>
            </a>
            </div>
            <h2 class="brand-before">
                <small>Welcome to</small>
            </h2>
            <h1 class="brand-name"><?php echo $_smarty_tpl->tpl_vars['company']->value;?>
</h1>
            <hr class="tagline-divider">
            <h2>
                <small>By <strong>Start Bootstrap</strong>
                </small>
            </h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">
                Build a website <strong>worth visiting</strong>
            </h2>
            <hr>
            <img class="img-responsive img-border img-left"
                 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/intro-pic.jpg" alt="">
            <hr class="visible-xs">
            <p>The boxes used in this template are nested inbetween a normal
                Bootstrap row and the start of your column layout. The boxes will be
                full-width boxes, so if you want to make them smaller then you will
                need to customize.</p>
            <p>
                A huge thanks to <a href="http://join.deathtothestockphoto.com/"
                                    target="_blank">Death to the Stock Photo</a> for allowing us to use
                the beautiful photos that make this template really come to life.
                When using this template, make sure your photos are decent. Also
                make sure that the file size on your photos is kept to a minumum to
                keep load times to a minimum.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                placerat diam quis nisl vestibulum dignissim. In hac habitasse
                platea dictumst. Interdum et malesuada fames ac ante ipsum primis in
                faucibus. Pellentesque habitant morbi tristique senectus et netus et
                malesuada fames ac turpis egestas.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">
                Beautiful boxes <strong>to showcase your content</strong>
            </h2>
            <hr>
            <p>Use as many boxes as you like, and put anything you want in
                them! They are great for just about anything, the sky's the limit!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                placerat diam quis nisl vestibulum dignissim. In hac habitasse
                platea dictumst. Interdum et malesuada fames ac ante ipsum primis in
                faucibus. Pellentesque habitant morbi tristique senectus et netus et
                malesuada fames ac turpis egestas.</p>
        </div>
    </div>
</div>

<?php
}
}
/* {/block 'top'} */
}
