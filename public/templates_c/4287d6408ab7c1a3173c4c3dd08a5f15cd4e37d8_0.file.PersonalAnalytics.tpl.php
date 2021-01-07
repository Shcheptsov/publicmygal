<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 13:56:24
  from 'C:\myProjects\mygal.local\www\Views\PersonalAnalytics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd8b278efe217_27225691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4287d6408ab7c1a3173c4c3dd08a5f15cd4e37d8' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\PersonalAnalytics.tpl',
      1 => 1607436419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd8b278efe217_27225691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19005706795fd8b278ee8252_36492653', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1061561185fd8b278ee9287_32482308', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "LayoutPersonal.tpl");
}
/* {block 'title'} */
class Block_19005706795fd8b278ee8252_36492653 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19005706795fd8b278ee8252_36492653',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
OrdersList<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1061561185fd8b278ee9287_32482308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1061561185fd8b278ee9287_32482308',
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
