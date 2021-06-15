<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 13:16:41
  from 'C:\myProjects\mygal.local\www\Views\Contacts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd8a929bef606_55387203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73cc1816822408c536845db154aec8e1f1f15162' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\Contacts.tpl',
      1 => 1605191519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd8a929bef606_55387203 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3845352735fd8a929bed8b6_18718524', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19786747095fd8a929beead5_00475138', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_3845352735fd8a929bed8b6_18718524 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3845352735fd8a929bed8b6_18718524',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
contacts<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_19786747095fd8a929beead5_00475138 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_19786747095fd8a929beead5_00475138',
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
