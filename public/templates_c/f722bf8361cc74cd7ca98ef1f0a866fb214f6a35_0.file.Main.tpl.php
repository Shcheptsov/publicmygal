<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-19 10:46:10
  from 'C:\xampp\htdocs\mygal\Views\Main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb63ee2be5d58_86819157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f722bf8361cc74cd7ca98ef1f0a866fb214f6a35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mygal\\Views\\Main.tpl',
      1 => 1605179138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb63ee2be5d58_86819157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8917538485fb63ee2be30b2_00274655', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14413638755fb63ee2be51a6_32206192', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_8917538485fb63ee2be30b2_00274655 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8917538485fb63ee2be30b2_00274655',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
main<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_14413638755fb63ee2be51a6_32206192 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14413638755fb63ee2be51a6_32206192',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   

<?php
}
}
/* {/block 'body'} */
}
