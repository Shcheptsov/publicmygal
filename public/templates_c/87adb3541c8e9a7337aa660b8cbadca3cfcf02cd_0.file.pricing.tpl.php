<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-12 09:08:14
  from 'C:\xampp\htdocs\Views\pricing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5faced6e836150_09033094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87adb3541c8e9a7337aa660b8cbadca3cfcf02cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\pricing.tpl',
      1 => 1605168446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faced6e836150_09033094 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16245706755faced6e834511_58558156', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21256028935faced6e8356b1_65425851', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_16245706755faced6e834511_58558156 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16245706755faced6e834511_58558156',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Тарифы<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_21256028935faced6e8356b1_65425851 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_21256028935faced6e8356b1_65425851',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
    <h1>Тарифы</h1>
<?php
}
}
/* {/block 'body'} */
}
