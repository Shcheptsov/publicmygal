<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-19 11:44:19
  from 'C:\myProjects\mygal.local\www\Views\Register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb64c83cbe883_44404921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1f6ce910ec12a264a7f06dfbbe87247dd1a1ae8' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\Register.tpl',
      1 => 1605189483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb64c83cbe883_44404921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19593674895fb64c83cbce51_83568845', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19344268375fb64c83cbde92_99153222', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_19593674895fb64c83cbce51_83568845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19593674895fb64c83cbce51_83568845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Registretion<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_19344268375fb64c83cbde92_99153222 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_19344268375fb64c83cbde92_99153222',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
         <h1>Registretion</h1>
                 <form action ="/users/register" method = "POST">
                 <input type ="text" name = "login" placeholder = "login"><br>
                 <input type ="text" name = "mail" placeholder = "mail"><br>
                 <input type ="password" name = "pass" placeholder = "password"><br>
                 <input type ="submit" value = "register">
                 </form>
<?php
}
}
/* {/block 'body'} */
}
