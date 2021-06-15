<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 08:21:51
  from 'C:\myProjects\mvc.local\www\Views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc8920f2d6a39_68469474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '844dd3e40ed4895d4bc561590a7501de510b3094' => 
    array (
      0 => 'C:\\myProjects\\mvc.local\\www\\Views\\Login.tpl',
      1 => 1605256452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc8920f2d6a39_68469474 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3354997035fc8920f2d4d49_18717777', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1315395645fc8920f2d5f72_91353912', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_3354997035fc8920f2d4d49_18717777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3354997035fc8920f2d4d49_18717777',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
login<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1315395645fc8920f2d5f72_91353912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1315395645fc8920f2d5f72_91353912',
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
