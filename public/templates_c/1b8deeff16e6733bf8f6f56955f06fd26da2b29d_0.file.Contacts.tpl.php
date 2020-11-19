<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-12 15:32:02
  from 'C:\xampp\htdocs\Views\Contacts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fad47628f0e16_67776987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b8deeff16e6733bf8f6f56955f06fd26da2b29d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Contacts.tpl',
      1 => 1605191519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fad47628f0e16_67776987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4666127535fad47628ef0b8_72882366', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12127512315fad47628f02b7_07483114', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_4666127535fad47628ef0b8_72882366 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4666127535fad47628ef0b8_72882366',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
contacts<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_12127512315fad47628f02b7_07483114 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12127512315fad47628f02b7_07483114',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
    <h1>Contacts</h1>
<?php
}
}
/* {/block 'body'} */
}
