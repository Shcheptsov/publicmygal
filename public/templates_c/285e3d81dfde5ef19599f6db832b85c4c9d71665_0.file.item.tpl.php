<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-09 12:38:29
  from 'C:\myProjects\mvc.local\www\Views\admin\item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd0b735029f11_16105159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '285e3d81dfde5ef19599f6db832b85c4c9d71665' => 
    array (
      0 => 'C:\\myProjects\\mvc.local\\www\\Views\\admin\\item.tpl',
      1 => 1607513851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd0b735029f11_16105159 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1968867595fd0b735017854_67563367', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9949698935fd0b735018f77_63809589', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "admin/Layout.tpl");
}
/* {block 'title'} */
class Block_1968867595fd0b735017854_67563367 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1968867595fd0b735017854_67563367',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
admin<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_9949698935fd0b735018f77_63809589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_9949698935fd0b735018f77_63809589',
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
