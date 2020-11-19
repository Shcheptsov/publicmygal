<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-19 11:44:02
  from 'C:\myProjects\mygal.local\www\Views\Main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb64c7258b1f5_63523458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '621fafa6327963010e28b473d742378626ce2601' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\Main.tpl',
      1 => 1605179138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb64c7258b1f5_63523458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2935711855fb64c72588a38_03947776', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11301158585fb64c7258a733_17700933', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_2935711855fb64c72588a38_03947776 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2935711855fb64c72588a38_03947776',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
main<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_11301158585fb64c7258a733_17700933 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11301158585fb64c7258a733_17700933',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   

<?php
}
}
/* {/block 'body'} */
}
