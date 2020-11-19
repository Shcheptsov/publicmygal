<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-12 15:01:39
  from 'C:\xampp\htdocs\Views\Register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fad4043c8ad20_89101779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89b06744bf7be02ad78e873f14c23fc3a0f2ca53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Register.tpl',
      1 => 1605189483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fad4043c8ad20_89101779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9825346435fad4043c89176_28991472', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8862007325fad4043c8a241_50243851', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_9825346435fad4043c89176_28991472 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9825346435fad4043c89176_28991472',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Registretion<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_8862007325fad4043c8a241_50243851 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8862007325fad4043c8a241_50243851',
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
