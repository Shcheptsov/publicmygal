<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 11:48:15
  from 'C:\myProjects\jquery.local\www\Views\Cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd8946f8f7fc2_80265750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '153dd798a3f73fe12fc871b7aef289760c3e0db2' => 
    array (
      0 => 'C:\\myProjects\\jquery.local\\www\\Views\\Cart.tpl',
      1 => 1607431104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd8946f8f7fc2_80265750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11495517175fd8946f8dfa13_14627516', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6749902765fd8946f8e13e6_47639455', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_11495517175fd8946f8dfa13_14627516 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11495517175fd8946f8dfa13_14627516',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Users list<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_6749902765fd8946f8e13e6_47639455 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6749902765fd8946f8e13e6_47639455',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="cart_div">
    <table class = "table">
        <thead>
            <th>ID</th>
            <th>Item</th>
            <th>Price</th>
            <th>Count</th>
            <th>Price Total</th>
            <th>Remove</th>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <tbody>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
$</td>
                <td><a href="/cart/inc?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">+</a> <?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
 <a href = "/cart/dec?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">-</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['count']*$_smarty_tpl->tpl_vars['item']->value['price'];?>
$</td>
                <td><a href='/cart/remove?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'>Remove</a></td>
            </tr>
        </tbody>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
        <div>Total: <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</div>
        <div><a href="/orders/create"><button class="btn btn-success">Make order</button></a></div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
