<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 13:55:47
  from 'C:\myProjects\mygal.local\www\Views\PersonalMain.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd8b253dbf4c8_27192479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a648b2a0f0d35f4a7dead94dc2fb5d844472b00' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\PersonalMain.tpl',
      1 => 1605193657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd8b253dbf4c8_27192479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_790398665fd8b253dbcba3_29848636', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20207987935fd8b253dbe6c3_40176387', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "LayoutPersonal.tpl");
}
/* {block 'title'} */
class Block_790398665fd8b253dbcba3_29848636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_790398665fd8b253dbcba3_29848636',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Personal main<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_20207987935fd8b253dbe6c3_40176387 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20207987935fd8b253dbe6c3_40176387',
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
