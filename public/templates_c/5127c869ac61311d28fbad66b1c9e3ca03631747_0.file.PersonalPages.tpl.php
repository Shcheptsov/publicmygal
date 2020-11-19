<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-12 16:08:21
  from 'C:\xampp\htdocs\Views\PersonalPages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fad4fe5553614_85375843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5127c869ac61311d28fbad66b1c9e3ca03631747' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\PersonalPages.tpl',
      1 => 1605193677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fad4fe5553614_85375843 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17852167385fad4fe5551b56_57631355', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11261457145fad4fe5552bf6_99977302', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "LayoutPersonal.tpl");
}
/* {block 'title'} */
class Block_17852167385fad4fe5551b56_57631355 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17852167385fad4fe5551b56_57631355',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Personal pages<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_11261457145fad4fe5552bf6_99977302 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11261457145fad4fe5552bf6_99977302',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
<h1>Pages</h1>
<?php
}
}
/* {/block 'body'} */
}
