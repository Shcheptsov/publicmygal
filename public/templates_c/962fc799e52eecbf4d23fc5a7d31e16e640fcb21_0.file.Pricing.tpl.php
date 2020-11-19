<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-19 11:44:18
  from 'C:\myProjects\mygal.local\www\Views\Pricing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb64c82bbc5e2_34332895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '962fc799e52eecbf4d23fc5a7d31e16e640fcb21' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\Pricing.tpl',
      1 => 1605179528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb64c82bbc5e2_34332895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20484057245fb64c82bbac21_70799589', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17694447965fb64c82bbbc16_09592047', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_20484057245fb64c82bbac21_70799589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20484057245fb64c82bbac21_70799589',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Pricing<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_17694447965fb64c82bbbc16_09592047 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17694447965fb64c82bbbc16_09592047',
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
