<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-07 14:53:39
  from 'C:\myProjects\mygal.local\www\Views\admin\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff7126387d714_93948909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e998eb82de969fbf300ec1cc8388d611ef72773' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\admin\\categories.tpl',
      1 => 1610027297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff7126387d714_93948909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_268851845ff71263863551_33161564', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12679679025ff71263864dd1_61518762', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "admin/Layout.tpl");
}
/* {block 'title'} */
class Block_268851845ff71263863551_33161564 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_268851845ff71263863551_33161564',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
admin<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_12679679025ff71263864dd1_61518762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12679679025ff71263864dd1_61518762',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<table class="table">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Update</th>
        <th>Remove</th>
    </thead>
        <tbody id="row_holder">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>      
            <tr id="row_<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
            <td><?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
</td>
            <td id = "name_<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['kat'];?>
</td>
            <td id = "update_<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><button class="btn btn-warning" onclick="updateStart(<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
);">Update</button></td>
            <td><button class="btn btn-danger" onclick="removeCategory(<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
);">Remove</button></td>
            <tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
</table>
<h1>Create new</h1>
<div class="alert alert-danger" style="width :200px; display: none">
    <strong>Error:</strong>
    <span id="massege">massege</span>
</div>

<input type ="text" id="new_category" name="name">
<button class = "btn btn-warning" onClick="createCategory();" >Create</button>
<?php echo '<script'; ?>
 src="/public/js/categories.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'body'} */
}
