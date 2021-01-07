<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 13:56:23
  from 'C:\myProjects\mygal.local\www\Views\PersonalPages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd8b277e8c476_22597110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f52f109d10e0022ea7792e546d0255eb2d08c46b' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\PersonalPages.tpl',
      1 => 1605193677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd8b277e8c476_22597110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7061499495fd8b277e8a9c7_59590779', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4846333255fd8b277e8b9f3_28657298', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "LayoutPersonal.tpl");
}
/* {block 'title'} */
class Block_7061499495fd8b277e8a9c7_59590779 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7061499495fd8b277e8a9c7_59590779',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Personal pages<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_4846333255fd8b277e8b9f3_28657298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4846333255fd8b277e8b9f3_28657298',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
<h1>Pages</h1>
<?php
}
}
/* {/block 'body'} */
}
