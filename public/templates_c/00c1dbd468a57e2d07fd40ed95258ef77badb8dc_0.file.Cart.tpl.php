<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-08 13:38:37
  from 'C:\myProjects\mvc.local\www\Views\Cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcf73cdddb8c4_49398044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00c1dbd468a57e2d07fd40ed95258ef77badb8dc' => 
    array (
      0 => 'C:\\myProjects\\mvc.local\\www\\Views\\Cart.tpl',
      1 => 1607431104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcf73cdddb8c4_49398044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1426382635fcf73cddb78e4_45160842', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16483517505fcf73cddbaa09_82023647', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_1426382635fcf73cddb78e4_45160842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1426382635fcf73cddb78e4_45160842',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Users list<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_16483517505fcf73cddbaa09_82023647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16483517505fcf73cddbaa09_82023647',
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
