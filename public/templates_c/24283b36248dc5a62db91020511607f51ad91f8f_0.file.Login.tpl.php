<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-19 11:44:20
  from 'C:\myProjects\mygal.local\www\Views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb64c848714b9_29533376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24283b36248dc5a62db91020511607f51ad91f8f' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\Login.tpl',
      1 => 1605256452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb64c848714b9_29533376 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16553280065fb64c8486fb14_19825403', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13053262875fb64c84870af7_29055571', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_16553280065fb64c8486fb14_19825403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16553280065fb64c8486fb14_19825403',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
login<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_13053262875fb64c84870af7_29055571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13053262875fb64c84870af7_29055571',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
         <h1>Login</h1>
            <form action ="/users/login" method = "POST">
                 <input type ="text" name = "login" placeholder = "login"><br>
                 <input type ="password" name = "pass" placeholder = "password"><br>
                 <input type ="submit" value = "login">
            </form>
<?php
}
}
/* {/block 'body'} */
}
