<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-13 11:32:40
  from 'C:\myProjects\mvc.local\www\Views\admin\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd5edc84d4e98_74095405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '470572e298887111fb3cbd0c2a7b6b3f3ddb8b02' => 
    array (
      0 => 'C:\\myProjects\\mvc.local\\www\\Views\\admin\\categories.tpl',
      1 => 1607855559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd5edc84d4e98_74095405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12964197005fd5edc84c2111_45995520', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12570354175fd5edc84c32e8_48913130', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "admin/Layout.tpl");
}
/* {block 'title'} */
class Block_12964197005fd5edc84c2111_45995520 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12964197005fd5edc84c2111_45995520',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
admin<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_12570354175fd5edc84c32e8_48913130 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12570354175fd5edc84c32e8_48913130',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Remove</th>
        </thead>
            <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>      
                        <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</td>
                        <td> <a href="/admin/category_remove?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><button class="btn btn-danger">Remove</button></a></td>
                        <tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
    </table>
            <form action ="/admin/category_create" method = "POST"> 
                <input type ="text" name="name">
                <button class = "btn btn-warning">Create</button>
                </form>
<?php
}
}
/* {/block 'body'} */
}
