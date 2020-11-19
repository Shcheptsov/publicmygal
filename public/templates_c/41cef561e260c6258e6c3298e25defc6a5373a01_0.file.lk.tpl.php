<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-12 12:42:04
  from 'C:\xampp\htdocs\Views\lk.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fad1f8c3e9978_33422911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41cef561e260c6258e6c3298e25defc6a5373a01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\lk.tpl',
      1 => 1605181239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fad1f8c3e9978_33422911 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13374805135fad1f8c3e6ef0_86463362', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8814525095fad1f8c3e8a11_57210637', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_13374805135fad1f8c3e6ef0_86463362 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13374805135fad1f8c3e6ef0_86463362',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Personal page<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_8814525095fad1f8c3e8a11_57210637 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8814525095fad1f8c3e8a11_57210637',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
    <h1>Personal page</h1>
<?php
}
}
/* {/block 'body'} */
}
