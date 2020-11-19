<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-12 15:21:40
  from 'C:\xampp\htdocs\Views\Example.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fad44f4a82497_85242788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f909171efc2b036bc4fc23d36bfadd9229ce6b59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Example.tpl',
      1 => 1605179544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fad44f4a82497_85242788 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12802581745fad44f4a808a1_98640778', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8972988385fad44f4a819f2_83164914', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_12802581745fad44f4a808a1_98640778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12802581745fad44f4a808a1_98640778',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Example<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_8972988385fad44f4a819f2_83164914 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8972988385fad44f4a819f2_83164914',
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
