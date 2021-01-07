<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 12:31:18
  from 'C:\myProjects\jquery.local\www\Views\OrderError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd89e8650b9a0_28686104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4f4dbe3278d585e85ab040158c479ac4e621431' => 
    array (
      0 => 'C:\\myProjects\\jquery.local\\www\\Views\\OrderError.tpl',
      1 => 1607430363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd89e8650b9a0_28686104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_993115785fd89e86509a76_71504333', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12513776895fd89e8650af27_06038952', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_993115785fd89e86509a76_71504333 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_993115785fd89e86509a76_71504333',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Order<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_12513776895fd89e8650af27_06038952 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12513776895fd89e8650af27_06038952',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 Order Error
<?php
}
}
/* {/block 'body'} */
}
