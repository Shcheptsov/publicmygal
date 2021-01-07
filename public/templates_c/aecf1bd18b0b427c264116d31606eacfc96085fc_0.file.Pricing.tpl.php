<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-07 08:52:04
  from 'C:\myProjects\mvc.local\www\Views\Pricing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcddf24c48ad1_27542624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aecf1bd18b0b427c264116d31606eacfc96085fc' => 
    array (
      0 => 'C:\\myProjects\\mvc.local\\www\\Views\\Pricing.tpl',
      1 => 1605179528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcddf24c48ad1_27542624 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20613479725fcddf24c46933_68924434', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18585316855fcddf24c47d84_93879110', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_20613479725fcddf24c46933_68924434 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20613479725fcddf24c46933_68924434',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Pricing<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_18585316855fcddf24c47d84_93879110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18585316855fcddf24c47d84_93879110',
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
