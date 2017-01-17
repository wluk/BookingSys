<?php
/* Smarty version 3.1.30, created on 2017-01-17 15:19:17
  from "C:\xampp\htdocs\Booking\app\Views\Booking\registration.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_587e27e59898f5_08480830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a1663eb188fe3a4d7c18088b297c1a06864f99e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Booking\\app\\Views\\Booking\\registration.html',
      1 => 1484662756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587e27e59898f5_08480830 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3594587e27e597efb9_56957220', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("\app\Views\main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'top'} */
class Block_3594587e27e597efb9_56957220 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
    <div class="box">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
reg" method="post">
            Nickname: <input type="text" name="nickname"><br>
            Nickname: <input type="text" name="nickname"><br>
            Nickname: <input type="text" name="nickname"><br>
            Nickname: <input type="text" name="nickname"><br>
            Nickname: <input type="text" name="nickname"><br>
        </form>
    </div>
</div>

<?php
}
}
/* {/block 'top'} */
}
