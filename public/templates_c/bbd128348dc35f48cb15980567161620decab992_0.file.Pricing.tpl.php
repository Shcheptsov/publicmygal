<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-12 12:26:14
  from 'C:\xampp\htdocs\Views\Pricing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fad1bd6aa2c03_96765983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbd128348dc35f48cb15980567161620decab992' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Pricing.tpl',
      1 => 1605179528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fad1bd6aa2c03_96765983 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_980300565fad1bd6aa0ec4_15943151', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19705378315fad1bd6aa20f8_37100662', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_980300565fad1bd6aa0ec4_15943151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_980300565fad1bd6aa0ec4_15943151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Pricing<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_19705378315fad1bd6aa20f8_37100662 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_19705378315fad1bd6aa20f8_37100662',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
    <h1>Pricing</h1>
<?php
}
}
/* {/block 'body'} */
}
