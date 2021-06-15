<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-08 14:07:08
  from 'C:\myProjects\mvc.local\www\Views\OrderSuccess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcf7a7cebdea9_49140750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d339c0ea226e1757e28431d46d62ee5c35b50d8' => 
    array (
      0 => 'C:\\myProjects\\mvc.local\\www\\Views\\OrderSuccess.tpl',
      1 => 1607431348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcf7a7cebdea9_49140750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_532859565fcf7a7cebba30_63158036', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13314738475fcf7a7cebd3e3_57690561', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_532859565fcf7a7cebba30_63158036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_532859565fcf7a7cebba30_63158036',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Order<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_13314738475fcf7a7cebd3e3_57690561 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13314738475fcf7a7cebd3e3_57690561',
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
