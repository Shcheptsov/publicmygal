<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-10 13:42:15
  from 'C:\myProjects\mygal.local\www\Views\admin\Image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffaf627cc3840_28059738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbf88eab5560daf587e1c5ae807a6e353921c6d4' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\admin\\Image.tpl',
      1 => 1610282515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modals/updateImage.tpl' => 1,
  ),
),false)) {
function content_5ffaf627cc3840_28059738 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8624434165ffaf627ca9e28_57450188', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17123073595ffaf627caba64_51367086', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "admin/Layout.tpl");
}
/* {block 'title'} */
class Block_8624434165ffaf627ca9e28_57450188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8624434165ffaf627ca9e28_57450188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
admin<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_17123073595ffaf627caba64_51367086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17123073595ffaf627caba64_51367086',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
    <div class="col-4">
        <div class="addImage"> 
            <form action ="/admin/imagesCreate" method = "POST" enctype="multipart/form-data">
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
        <?php $_smarty_tpl->_subTemplateRender('file:modals/updateImage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
