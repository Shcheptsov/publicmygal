<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-07 08:51:50
  from 'C:\myProjects\mvc.local\www\Views\Register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcddf166a6c73_35493786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e17002962053f58dcd0757ca7db39e3c033fb814' => 
    array (
      0 => 'C:\\myProjects\\mvc.local\\www\\Views\\Register.tpl',
      1 => 1605189483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcddf166a6c73_35493786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5226857865fcddf166a4a44_04973766', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_627396075fcddf166a6016_01932366', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_5226857865fcddf166a4a44_04973766 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5226857865fcddf166a4a44_04973766',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Registretion<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_627396075fcddf166a6016_01932366 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_627396075fcddf166a6016_01932366',
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
