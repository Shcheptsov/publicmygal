<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-19 10:47:26
  from 'C:\xampp\htdocs\mygal\Views\Pricing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb63f2eefe990_99910984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee4d106de70fc0cd9f3f27f00cfaf6161e1c8bb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mygal\\Views\\Pricing.tpl',
      1 => 1605179528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb63f2eefe990_99910984 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14416662745fb63f2eefcbe6_74907777', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9079694395fb63f2eefdde4_23398578', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_14416662745fb63f2eefcbe6_74907777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14416662745fb63f2eefcbe6_74907777',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Pricing<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_9079694395fb63f2eefdde4_23398578 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_9079694395fb63f2eefdde4_23398578',
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
