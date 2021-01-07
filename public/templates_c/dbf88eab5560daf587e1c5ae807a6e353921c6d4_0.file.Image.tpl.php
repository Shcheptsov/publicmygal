<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-07 14:53:40
  from 'C:\myProjects\mygal.local\www\Views\admin\Image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff712643033d0_13771824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbf88eab5560daf587e1c5ae807a6e353921c6d4' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\admin\\Image.tpl',
      1 => 1610027321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff712643033d0_13771824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4512604895ff712642e8e99_22449708', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20629578815ff712642e9f13_74103692', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "admin/Layout.tpl");
}
/* {block 'title'} */
class Block_4512604895ff712642e8e99_22449708 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4512604895ff712642e8e99_22449708',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
admin<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_20629578815ff712642e9f13_74103692 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20629578815ff712642e9f13_74103692',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
    <div class="col-4">
        <div class="addImage"> 
            <form action ="/admin/items_create" method = "POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail">description</label><br>
                    <input type ="text" class ="form-conrol" name = "description" placeholder = "description">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">category</label><br>
                    <select name = "category" class="selectpicker form-conrol">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                            <option   value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['kat'];?>
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
    </div>
    <div class="col-8">
        <h1>выберите категорию</h1>
        <form action ="/admin/images" method = "POST" enctype="multipart/form-data">
            <select id = "selectCategory" onclick="updateImage()" class="selectpicker form-conrol" style="width: 200px">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                <option   value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['kat'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </form>
            <div id="thumbnail"></div>
                <div class="col-sm-6 col-md-3" id="thumbnail1" style=" display:inline-block">
            </div>
            <?php echo '<script'; ?>
 type="text/javascript" src="/public/js/updateImage.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    updateImage();
<?php echo '</script'; ?>
>          
    </div>
</div>
<?php
}
}
/* {/block 'body'} */
}
