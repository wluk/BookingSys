<?php
/* Smarty version 3.1.30, created on 2017-01-12 12:02:56
  from "C:\xampp\htdocs\Booking\app\Views\Home\about.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58776260460dd0_91836497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64bb4c8356296b9f7d0542ae4e3de574b09a264c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Booking\\app\\Views\\Home\\about.html',
      1 => 1484218974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58776260460dd0_91836497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_264465877626044fb88_28024900', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("\app\Views\main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'top'} */
class Block_264465877626044fb88_28024900 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
	<div class="box">
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">
				About <strong>business casual</strong>
			</h2>
			<hr>
		</div>
		<div class="col-md-6">
			<img class="img-responsive img-border-left" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/slide-2.jpg"
				alt="">
		</div>
		<div class="col-md-6">
			<p>This is a great place to introduce your company or project and
				describe what you do.</p>
			<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem
				rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums
				unsers sadips amets.</p>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
				accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
				quae ab illo inventore veritatis et quasi architecto beatae vitae
				dicta sunt explicabo.</p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="row">
	<div class="box">
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">
				Our <strong>Team</strong>
			</h2>
			<hr>
		</div>
		<div class="col-sm-4 text-center">
			<img class="img-responsive" src="http://placehold.it/750x450" alt="">
			<h3>
				John Smith <small>Job Title</small>
			</h3>
		</div>
		<div class="col-sm-4 text-center">
			<img class="img-responsive" src="http://placehold.it/750x450" alt="">
			<h3>
				John Smith <small>Job Title</small>
			</h3>
		</div>
		<div class="col-sm-4 text-center">
			<img class="img-responsive" src="http://placehold.it/750x450" alt="">
			<h3>
				John Smith <small>Job Title</small>
			</h3>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php
}
}
/* {/block 'top'} */
}
