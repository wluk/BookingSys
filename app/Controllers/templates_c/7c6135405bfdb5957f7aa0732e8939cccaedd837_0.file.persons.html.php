<?php
/* Smarty version 3.1.30, created on 2017-04-07 00:14:16
  from "C:\xampp\htdocs\silka\app\Views\Admin\persons.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e6bdb88bf937_51413786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c6135405bfdb5957f7aa0732e8939cccaedd837' => 
    array (
      0 => 'C:\\xampp\\htdocs\\silka\\app\\Views\\Admin\\persons.html',
      1 => 1491516845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e6bdb88bf937_51413786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189896450658e6bdb859b228_39997018', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115430097858e6bdb8623e52_86841485', 'msg');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28300300658e6bdb8660444_82622623', 'hero');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159908453758e6bdb8875807_51802405', 'top');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19694940358e6bdb88aa4d8_46137158', 'script');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("\app\Views\main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'head'} */
class Block_189896450658e6bdb859b228_39997018 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
    .panel-table .panel-body {
        padding: 0;
    }

    .panel-table .panel-body .table-bordered {
        border-style: none;
        margin: 0;
    }

    .panel-table .panel-body .table-bordered > thead > tr > th:first-of-type {
        text-align: center;
        width: 100px;
    }

    .panel-table .panel-body .table-bordered > thead > tr > th:last-of-type,
    .panel-table .panel-body .table-bordered > tbody > tr > td:last-of-type {
        border-right: 0px;
    }

    .panel-table .panel-body .table-bordered > thead > tr > th:first-of-type,
    .panel-table .panel-body .table-bordered > tbody > tr > td:first-of-type {
        border-left: 0px;
    }

    .panel-table .panel-body .table-bordered > tbody > tr:first-of-type > td {
        border-bottom: 0px;
    }

    .panel-table .panel-body .table-bordered > thead > tr:first-of-type > th {
        border-top: 0px;
    }

    .panel-table .panel-footer .pagination {
        margin: 0;
    }

    /*
    used to vertically center elements, may need modification if you're not using default sizes.
    */
    .panel-table .panel-footer .col {
        line-height: 34px;
        height: 34px;
    }

    .panel-table .panel-heading .col h3 {
        line-height: 30px;
        height: 30px;
    }

    .panel-table .panel-body .table-bordered > tbody > tr > td {
        line-height: 34px;
    }
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
      type='text/css'>
<?php
}
}
/* {/block 'head'} */
/* {block 'msg'} */
class Block_115430097858e6bdb8623e52_86841485 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
<div class="alert alert-warning" role="alert"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
<?php }
}
}
/* {/block 'msg'} */
/* {block 'hero'} */
class Block_28300300658e6bdb8660444_82622623 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="fh5co-parallax" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/home-image-3.jpg);"
     data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                <div class="fh5co-intro fh5co-table-cell animate-box">
                    <h1 class="text-center">Klubowicze</h1>
                    <p>Lista zarejestrowanych użytkowników klubu</p>
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
class Block_159908453758e6bdb8875807_51802405 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <div class="row">
        <p></p>
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <h3 class="panel-title">Panel Heading</h3>
                        </div>
                        <div class="col col-xs-6 text-right">
                            <button type="button" class="btn btn-sm btn-primary btn-create">Create New</button>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list">
                        <thead>
                        <tr>
                            <th class="hidden-xs">ID</th>
                            <th>E-mail</th>
                            <th>Imie</th>
                            <th>Nazwisko</th>
                            <th>Telefon</th>
                            <th>Typ konta</th>
                            <th><em class="fa fa-cog"></em></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['return']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
                        <tr>
                            <td class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['foo']->value['ID'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['LOGIN'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['NAME'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['SURNAME'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['PHONE'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['ROLE'];?>
</td>
                            <td align="center">
                                <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                    </table>

                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col col-xs-4">Page 1 of <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

                        </div>
                        <div class="col col-xs-8">
                            <ul class="pagination hidden-xs pull-right">
                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['page']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['page']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                <li><a href="?action=person&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
                                <?php }
}
?>

                            </ul>
                            <ul class="pagination visible-xs pull-right">
                                <li><a href="#">«</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'top'} */
/* {block 'script'} */
class Block_19694940358e6bdb88aa4d8_46137158 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'script'} */
}
