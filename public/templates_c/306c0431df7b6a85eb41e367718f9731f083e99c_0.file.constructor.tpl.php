<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-12 13:57:04
  from 'C:\myProjects\mygal.local\www\Views\admin\constructor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c4a110cc3ab0_42156869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '306c0431df7b6a85eb41e367718f9731f083e99c' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\admin\\constructor.tpl',
      1 => 1623498880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modals/Logo.tpl' => 1,
  ),
),false)) {
function content_60c4a110cc3ab0_42156869 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169270260360c4a110cb1952_90034568', 'title');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32616255660c4a110cb29f8_46866315', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101812105160c4a110cb35f7_29247808', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "admin/Layout.tpl");
}
/* {block 'title'} */
class Block_169270260360c4a110cb1952_90034568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_169270260360c4a110cb1952_90034568',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Responsive Image Gallery<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_32616255660c4a110cb29f8_46866315 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_32616255660c4a110cb29f8_46866315',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
    <meta name="description" content="Responsive Image Gallery with jQuery" />
    <meta name="keywords" content="jquery, carousel, image gallery, slider, responsive, flexible, fluid, resize, css3" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="/public/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="/public/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/public/css/elastislide.css" />
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />

<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_101812105160c4a110cb35f7_29247808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_101812105160c4a110cb35f7_29247808',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style>
        #block1{
            margin-left: 25%;
            float: left;
            width: 300px;
            height: 400px; 
            background-color: gray
        }
        #block2{
            
            float: left;
            margin-left: 100px;
            width: 300px;
            height: 400px; 
            background-color: gray
        }
        .sortable-ul {
	list-style-type: none; 
	margin: 10px auto; 
	padding: 0; 
	width: 300px;
}
.sortable-ul li {
	margin: 4px 0; 
	padding: 5px 10px; 
	font-size: 16px;
	background: #eee;
	border: 1px solid #e0e0e0;
	border-left: 8px solid #e0e0e0;
}
        
    </style>
    <div id ="block1">
        <ul class="sortable-ul">
            <li><a class="nav-link" href="#" data-toggle="modal" data-target="#logo">Logo</a></li>
            <li>links</li>
            <li>gallery</li>
            <li>map</li>
        </ul>
    </div>
     <?php $_smarty_tpl->_subTemplateRender('file:modals/Logo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <div id ="block2">
         block2
    </div>
    
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
$('.sortable-ul').sortable({
	revert: 100
});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'body'} */
}
