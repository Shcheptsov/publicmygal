<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-12 15:20:21
  from 'C:\xampp\htdocs\Views\Lk.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fad44a5bc4440_54490000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '133b856104e5e368a90eb2520ce6d6ea3508d632' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Lk.tpl',
      1 => 1605190661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fad44a5bc4440_54490000 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10012359045fad44a5bb5385_92951017', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8307413725fad44a5bb7140_17478940', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_10012359045fad44a5bb5385_92951017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10012359045fad44a5bb5385_92951017',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Personal page<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_8307413725fad44a5bb7140_17478940 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8307413725fad44a5bb7140_17478940',
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
