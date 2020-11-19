<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-12 16:08:00
  from 'C:\xampp\htdocs\Views\PersonalMain.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fad4fd04c6d83_09079198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '952017b540297d1c00a62db5d9495bfeea27faab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\PersonalMain.tpl',
      1 => 1605193657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fad4fd04c6d83_09079198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5114740175fad4fd04c4482_59527021', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16182683545fad4fd04c5aa0_63358711', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "LayoutPersonal.tpl");
}
/* {block 'title'} */
class Block_5114740175fad4fd04c4482_59527021 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5114740175fad4fd04c4482_59527021',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Personal main<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_16182683545fad4fd04c5aa0_63358711 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16182683545fad4fd04c5aa0_63358711',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
<h1>Main</h1>
<?php
}
}
/* {/block 'body'} */
}
