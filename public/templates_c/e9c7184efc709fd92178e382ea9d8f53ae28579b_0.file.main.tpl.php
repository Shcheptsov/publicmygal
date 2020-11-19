<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-11 14:40:07
  from 'C:\xampp\htdocs\Views\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fabe9b7a41ed2_55102718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9c7184efc709fd92178e382ea9d8f53ae28579b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\main.tpl',
      1 => 1605102005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fabe9b7a41ed2_55102718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15850663385fabe9b7a3fc03_37625372', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9977516305fabe9b7a41362_54898150', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_15850663385fabe9b7a3fc03_37625372 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15850663385fabe9b7a3fc03_37625372',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
main<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_9977516305fabe9b7a41362_54898150 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_9977516305fabe9b7a41362_54898150',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   

<?php
}
}
/* {/block 'body'} */
}
