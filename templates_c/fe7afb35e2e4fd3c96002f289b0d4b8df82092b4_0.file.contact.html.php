<?php
/* Smarty version 3.1.30, created on 2017-01-12 11:58:59
  from "C:\xampp\htdocs\Booking\app\Views\Home\contact.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_587761738ffea8_27450331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe7afb35e2e4fd3c96002f289b0d4b8df82092b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Booking\\app\\Views\\Home\\contact.html',
      1 => 1484142837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587761738ffea8_27450331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10549587761738eb178_97883645', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("\app\Views\main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'top'} */
class Block_10549587761738eb178_97883645 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
	<div class="box">
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">
				Contact <strong>business casual</strong>
			</h2>
			<hr>
		</div>
		<div class="col-md-8">
			<!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
			<iframe width="100%" height="400" frameborder="0" scrolling="no"
				marginheight="0" marginwidth="0"
				src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
		</div>
		<div class="col-md-4">
			<p>
				Phone: <strong>123.456.7890</strong>
			</p>
			<p>
				Email: <strong><a href="mailto:name@example.com">name@example.com</a></strong>
			</p>
			<p>
				Address: <strong>3481 Melrose Place <br>Beverly Hills,
					CA 90210
				</strong>
			</p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="row">
	<div class="box">
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">
				Contact <strong>form</strong>
			</h2>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
				Fugiat, vitae, distinctio, possimus repudiandae cupiditate ipsum
				excepturi dicta neque eaque voluptates tempora veniam esse earum
				sapiente optio deleniti consequuntur eos voluptatem.</p>
			<form role="form">
				<div class="row">
					<div class="form-group col-lg-4">
						<label>Name</label> <input type="text" class="form-control">
					</div>
					<div class="form-group col-lg-4">
						<label>Email Address</label> <input type="email"
							class="form-control">
					</div>
					<div class="form-group col-lg-4">
						<label>Phone Number</label> <input type="tel" class="form-control">
					</div>
					<div class="clearfix"></div>
					<div class="form-group col-lg-12">
						<label>Message</label>
						<textarea class="form-control" rows="6"></textarea>
					</div>
					<div class="form-group col-lg-12">
						<input type="hidden" name="save" value="contact">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
}
}
/* {/block 'top'} */
}
