<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-08 16:58:16
  from 'C:\myProjects\mvc.local\www\Views\admin\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcfa2981dec50_72951219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd1582e5750df81335e33535c825cf9b65aba067' => 
    array (
      0 => 'C:\\myProjects\\mvc.local\\www\\Views\\admin\\index.tpl',
      1 => 1607443094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcfa2981dec50_72951219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5126414845fcfa2981c2d14_13053826', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16705307735fcfa2981c48a0_56066593', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "admin/Layout.tpl");
}
/* {block 'title'} */
class Block_5126414845fcfa2981c2d14_13053826 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5126414845fcfa2981c2d14_13053826',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
admin<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_16705307735fcfa2981c48a0_56066593 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16705307735fcfa2981c48a0_56066593',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <table class="table">
        <thead>
        <th>order id</th>
        <th>user id</th>
        <th>items</th>
        <th>Create_at</th>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['user_id'];?>
</td>
                <td>
                    <table class="table">
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value['items'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
</td>
                            </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['date'];?>
</td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
<?php
}
}
/* {/block 'body'} */
}
