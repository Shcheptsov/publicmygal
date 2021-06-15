<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 13:16:36
  from 'C:\myProjects\mygal.local\www\Views\Lk.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd8a92435de76_22712596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '566589e53acce0c676dc800d9f4c546727ca0ad9' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\Lk.tpl',
      1 => 1605190661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd8a92435de76_22712596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15282163335fd8a924354a88_26890253', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19514396755fd8a924355c18_67680036', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_15282163335fd8a924354a88_26890253 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15282163335fd8a924354a88_26890253',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Personal page<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_19514396755fd8a924355c18_67680036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_19514396755fd8a924355c18_67680036',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
                <?php if (!empty($_SESSION['user']['login'])) {?>
                        <h1>Personal page</h1>
            <?php } else { ?>

            <?php }?>

<?php
}
}
/* {/block 'body'} */
}
