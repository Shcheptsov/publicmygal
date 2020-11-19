<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-12 12:06:46
  from 'C:\xampp\htdocs\Views\Main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fad1746577062_20824791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b952428e64c5522d7c6fc017fd5a4d966b53d5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Main.tpl',
      1 => 1605179138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fad1746577062_20824791 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14974395fad1746574583_79448433', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20541672985fad17465761d6_24495366', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_14974395fad1746574583_79448433 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14974395fad1746574583_79448433',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
main<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_20541672985fad17465761d6_24495366 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20541672985fad17465761d6_24495366',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   

<?php
}
}
/* {/block 'body'} */
}
