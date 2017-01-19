<?php
/* Smarty version 3.1.30, created on 2017-01-19 21:53:12
  from "C:\xampp\htdocs\Booking\app\Views\Home\blog.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588127382fc6e5_98481416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4236be3ac3268744d204f5c81f537515ee3fbed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Booking\\app\\Views\\Home\\blog.html',
      1 => 1484666763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588127382fc6e5_98481416 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31234588127382ea941_47712996', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("\app\Views\main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'top'} */
class Block_31234588127382ea941_47712996 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
	<div class="box">
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">
				Company <strong>blog</strong>
			</h2>
			<hr>
		</div>
		<div class="col-lg-12 text-center">
			<img class="img-responsive img-border img-full" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/slide-1.jpg"
				alt="">
			<h2>
				Post Title <br> <small>October 13, 2013</small>
			</h2>
			<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem
				rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums
				unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error
				sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
				eaque ipsa quae ab illo inventore veritatis et quasi architecto
				beatae vitae dicta sunt explicabo.</p>
			<a href="#" class="btn btn-default btn-lg">Read More</a>
			<hr>
		</div>
		<div class="col-lg-12 text-center">
			<img class="img-responsive img-border img-full" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/slide-2.jpg"
				alt="">
			<h2>
				Post Title <br> <small>October 13, 2013</small>
			</h2>
			<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem
				rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums
				unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error
				sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
				eaque ipsa quae ab illo inventore veritatis et quasi architecto
				beatae vitae dicta sunt explicabo.</p>
			<a href="#" class="btn btn-default btn-lg">Read More</a>
			<hr>
		</div>
		<div class="col-lg-12 text-center">
			<img class="img-responsive img-border img-full" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/slide-3.jpg"
				alt="">
			<h2>
				Post Title <br> <small>October 13, 2013</small>
			</h2>
			<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem
				rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums
				unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error
				sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
				eaque ipsa quae ab illo inventore veritatis et quasi architecto
				beatae vitae dicta sunt explicabo.</p>
			<a href="#" class="btn btn-default btn-lg">Read More</a>
			<hr>
		</div>
		<div class="col-lg-12 text-center">
			<ul class="pager">
				<li class="previous"><a href="#">&larr; Older</a></li>
				<li class="next"><a href="#">Newer &rarr;</a></li>
			</ul>
		</div>
	</div>
</div>
<?php
}
}
/* {/block 'top'} */
}
