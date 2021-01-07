<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 12:31:47
  from 'C:\myProjects\jquery.local\www\Views\OrderSuccess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd89ea365ff34_95682703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c740fbfc78288d91acdb881674022aba331eb6e' => 
    array (
      0 => 'C:\\myProjects\\jquery.local\\www\\Views\\OrderSuccess.tpl',
      1 => 1607431348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd89ea365ff34_95682703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6393229655fd89ea365e227_00092453', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20597188705fd89ea365f3a2_95725421', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_6393229655fd89ea365e227_00092453 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6393229655fd89ea365e227_00092453',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Order<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_20597188705fd89ea365f3a2_95725421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20597188705fd89ea365f3a2_95725421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 Order success
<?php
}
}
/* {/block 'body'} */
}
