<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-11 20:45:43
  from 'C:\xampp\htdocs\Views\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8352d707a934_97449788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43ee7b809db4cd45bbca42a4cfcc9cce65aa5309' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\users.tpl',
      1 => 1602441883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8352d707a934_97449788 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3113240645f8352d6c2ee89_67427803', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9483588095f8352d6c30ce6_62019513', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_3113240645f8352d6c2ee89_67427803 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3113240645f8352d6c2ee89_67427803',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Users list<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_9483588095f8352d6c30ce6_62019513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_9483588095f8352d6c30ce6_62019513',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
    <table border ="1">
    <thead>
    <th>LOGIN</th>
    <th>PASSWORD</th>
    </thead>
    <tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['password'];?>
</td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'body'} */
}
