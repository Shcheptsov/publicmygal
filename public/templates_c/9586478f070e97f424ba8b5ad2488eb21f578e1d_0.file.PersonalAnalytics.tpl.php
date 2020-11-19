<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-12 16:08:22
  from 'C:\xampp\htdocs\Views\PersonalAnalytics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fad4fe634b971_99933895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9586478f070e97f424ba8b5ad2488eb21f578e1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\PersonalAnalytics.tpl',
      1 => 1605193650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fad4fe634b971_99933895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20663896655fad4fe6349d51_47129499', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15794368185fad4fe634ae73_10451432', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "LayoutPersonal.tpl");
}
/* {block 'title'} */
class Block_20663896655fad4fe6349d51_47129499 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20663896655fad4fe6349d51_47129499',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Personal analytics<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_15794368185fad4fe634ae73_10451432 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15794368185fad4fe634ae73_10451432',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
<h1>Analytics</h1>
<?php
}
}
/* {/block 'body'} */
}
