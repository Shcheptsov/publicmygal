<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 13:16:06
  from 'C:\myProjects\mygal.local\www\Views\Main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd8a9060f2eb7_31512908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '621fafa6327963010e28b473d742378626ce2601' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\Main.tpl',
      1 => 1608034563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd8a9060f2eb7_31512908 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11553598545fd8a9060f0785_89401761', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7611000105fd8a9060f2384_40776971', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_11553598545fd8a9060f0785_89401761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11553598545fd8a9060f0785_89401761',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
main<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_7611000105fd8a9060f2384_40776971 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7611000105fd8a9060f2384_40776971',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
    <h1>main</h1>
<?php
}
}
/* {/block 'body'} */
}
