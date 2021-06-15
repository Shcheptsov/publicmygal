<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 11:48:28
  from 'C:\myProjects\jquery.local\www\Views\admin\item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd8947c95d655_73068184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f09239395cb147c7ef5886c826f4b96357a3c5d' => 
    array (
      0 => 'C:\\myProjects\\jquery.local\\www\\Views\\admin\\item.tpl',
      1 => 1607513851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd8947c95d655_73068184 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14947691495fd8947c94c4d2_03269461', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16237522395fd8947c94d516_87238232', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "admin/Layout.tpl");
}
/* {block 'title'} */
class Block_14947691495fd8947c94c4d2_03269461 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14947691495fd8947c94c4d2_03269461',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
admin<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_16237522395fd8947c94d516_87238232 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16237522395fd8947c94d516_87238232',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
            <h1>Items</h1> 
            <form action ="/admin/items_create" method = "POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail">Title</label><br>
                        <input type ="text" class ="form-conrol" name = "title" placeholder = "title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">description</label><br>
                        <input type ="text" class ="form-conrol" name = "description" placeholder = "description">
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail">price</label><br>
                        <input type ="text" class ="form-conrol" name = "price" placeholder = "price">
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail">Category</label><br>
                        <select class="selectpicker form-conrol">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail">Image</label><br>
                        <input type ="file" class ="form-conrol" name = "picture" placeholder = "image">
                    </div>
                     <button type ="submit" class="btn-success">Enter</button>
            </form>
    </div>
<?php
}
}
/* {/block 'body'} */
}
