<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-08 15:51:46
  from 'C:\myProjects\mvc.local\www\Views\OrderList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcf9302b1f5e3_48401217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd20206f6b05381347ca9fb79688a7ac1b987b6a4' => 
    array (
      0 => 'C:\\myProjects\\mvc.local\\www\\Views\\OrderList.tpl',
      1 => 1607439104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcf9302b1f5e3_48401217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1451172275fcf9302b09085_47167343', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1178336135fcf9302b0a216_66708332', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_1451172275fcf9302b09085_47167343 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1451172275fcf9302b09085_47167343',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
OrdersList<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1178336135fcf9302b0a216_66708332 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1178336135fcf9302b0a216_66708332',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
    <table class="table">
        <thead>
        <th>Orders</th>
        <th>Date</th>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['items'];?>
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
