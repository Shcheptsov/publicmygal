<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-19 11:44:18
  from 'C:\myProjects\mygal.local\www\Views\Example.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb64c82129851_03866652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c35f7076e9e0aa02554cca5f38e602f3777cdf9' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\Example.tpl',
      1 => 1605179544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb64c82129851_03866652 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15110646275fb64c82127a68_84001028', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2697744755fb64c82128cc2_82860833', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_15110646275fb64c82127a68_84001028 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15110646275fb64c82127a68_84001028',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Example<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_2697744755fb64c82128cc2_82860833 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2697744755fb64c82128cc2_82860833',
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
