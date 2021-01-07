<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-08 12:37:15
  from 'C:\myProjects\mvc.local\www\Views\Example.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcf656be15920_80581535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c3f799b8e804af625da97b3fb9d70c65fb50530' => 
    array (
      0 => 'C:\\myProjects\\mvc.local\\www\\Views\\Example.tpl',
      1 => 1605179544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcf656be15920_80581535 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14987566185fcf656be13125_09851485', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8526038435fcf656be14de2_67487142', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_14987566185fcf656be13125_09851485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14987566185fcf656be13125_09851485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Example<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_8526038435fcf656be14de2_67487142 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8526038435fcf656be14de2_67487142',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
    <h1> Example</h1>
<?php
}
}
/* {/block 'body'} */
}
