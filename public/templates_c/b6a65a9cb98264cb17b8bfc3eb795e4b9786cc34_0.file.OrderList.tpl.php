<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 13:16:10
  from 'C:\myProjects\mygal.local\www\Views\OrderList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd8a90a202089_00225704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6a65a9cb98264cb17b8bfc3eb795e4b9786cc34' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\OrderList.tpl',
      1 => 1607439104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd8a90a202089_00225704 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9516641765fd8a90a1efca9_96429179', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_999624775fd8a90a1f0e22_51760584', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_9516641765fd8a90a1efca9_96429179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9516641765fd8a90a1efca9_96429179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
OrdersList<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_999624775fd8a90a1f0e22_51760584 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_999624775fd8a90a1f0e22_51760584',
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
