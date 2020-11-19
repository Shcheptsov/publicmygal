<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-13 09:34:17
  from 'C:\xampp\htdocs\Views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fae450924e373_43294568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0751447a949d5d00d98ed595ab7a2ac8417973e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Login.tpl',
      1 => 1605256452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fae450924e373_43294568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10439527875fae450924bca2_05534374', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19018050695fae450924d958_69630807', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_10439527875fae450924bca2_05534374 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10439527875fae450924bca2_05534374',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
login<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_19018050695fae450924d958_69630807 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_19018050695fae450924d958_69630807',
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
