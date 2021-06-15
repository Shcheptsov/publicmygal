<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-08 13:43:01
  from 'C:\myProjects\mvc.local\www\Views\OrderError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcf74d57d9311_99062348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b66396b55732558d427ab047297d0c5b0fe174ef' => 
    array (
      0 => 'C:\\myProjects\\mvc.local\\www\\Views\\OrderError.tpl',
      1 => 1607430363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcf74d57d9311_99062348 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12414637225fcf74d57d5460_50503082', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_639226845fcf74d57d7bf7_41841231', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_12414637225fcf74d57d5460_50503082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12414637225fcf74d57d5460_50503082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Order<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_639226845fcf74d57d7bf7_41841231 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_639226845fcf74d57d7bf7_41841231',
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
