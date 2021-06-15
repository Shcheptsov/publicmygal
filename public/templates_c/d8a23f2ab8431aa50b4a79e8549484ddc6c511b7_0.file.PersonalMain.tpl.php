<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 14:30:09
  from 'C:\myProjects\mvc.local\www\Views\PersonalMain.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc8e861e5e076_10757429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8a23f2ab8431aa50b4a79e8549484ddc6c511b7' => 
    array (
      0 => 'C:\\myProjects\\mvc.local\\www\\Views\\PersonalMain.tpl',
      1 => 1605193657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc8e861e5e076_10757429 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19914324155fc8e861e5a8f9_47117244', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17797547505fc8e861e5c908_22783870', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "LayoutPersonal.tpl");
}
/* {block 'title'} */
class Block_19914324155fc8e861e5a8f9_47117244 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19914324155fc8e861e5a8f9_47117244',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Personal main<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_17797547505fc8e861e5c908_22783870 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17797547505fc8e861e5c908_22783870',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
<h1>Main</h1>
<?php
}
}
/* {/block 'body'} */
}
