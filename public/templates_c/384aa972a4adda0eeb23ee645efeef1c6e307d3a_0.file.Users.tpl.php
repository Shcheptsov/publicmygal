<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 15:16:51
  from 'C:\myProjects\mvc.local\www\Views\Users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc8f3537046c5_95952264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '384aa972a4adda0eeb23ee645efeef1c6e307d3a' => 
    array (
      0 => 'C:\\myProjects\\mvc.local\\www\\Views\\Users.tpl',
      1 => 1607005008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc8f3537046c5_95952264 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2980020285fc8f3536ea4f8_86002710', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18077366735fc8f3536ebd90_20565805', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_2980020285fc8f3536ea4f8_86002710 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2980020285fc8f3536ea4f8_86002710',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Users list<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_18077366735fc8f3536ebd90_20565805 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18077366735fc8f3536ebd90_20565805',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
    <table class="table table-striped">
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
    <tr class="
     <?php if ($_SESSION['user']['login'] === $_smarty_tpl->tpl_vars['user']->value['login']) {?>
        table-success
      <?php }?>
        ">
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
