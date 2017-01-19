<?php
/* Smarty version 3.1.30, created on 2017-01-19 21:51:25
  from "C:\xampp\htdocs\Booking\app\Views\Booking\book.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588126cd4dc884_50205585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40eab8ae6d6228d0d48e863ea1ddf8c093676d9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Booking\\app\\Views\\Booking\\book.html',
      1 => 1484859076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588126cd4dc884_50205585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30306588126cd4bd411_42227668', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("\app\Views\main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'top'} */
class Block_30306588126cd4bd411_42227668 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
    <div class="box">
        <p>Book</p>
    </div>
</div>
<?php
}
}
/* {/block 'top'} */
}
