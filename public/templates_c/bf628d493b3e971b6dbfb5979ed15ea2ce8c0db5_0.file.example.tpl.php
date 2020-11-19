<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-12 09:06:04
  from 'C:\xampp\htdocs\Views\example.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5facececd7b347_90067120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf628d493b3e971b6dbfb5979ed15ea2ce8c0db5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\example.tpl',
      1 => 1605168340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5facececd7b347_90067120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3598019585facececd78c67_46911474', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6612596465facececd7a5f0_52661606', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_3598019585facececd78c67_46911474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3598019585facececd78c67_46911474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Примеры<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_6612596465facececd7a5f0_52661606 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6612596465facececd7a5f0_52661606',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
    <h1> Примеры</h1>
<?php
}
}
/* {/block 'body'} */
}
