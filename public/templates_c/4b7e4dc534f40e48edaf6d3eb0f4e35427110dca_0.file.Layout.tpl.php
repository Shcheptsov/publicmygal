<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-07 13:50:15
  from 'C:\myProjects\mygal.local\www\Views\admin\Layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff70387a56007_26771342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b7e4dc534f40e48edaf6d3eb0f4e35427110dca' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\admin\\Layout.tpl',
      1 => 1610023813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff70387a56007_26771342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<head>
  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11110097045ff70387a40f68_59865424', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14972006265ff70387a45010_71881670', 'head');
?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/admin/personal/1">LOGO</a>    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li><a class="nav-link" href="/admin/personal/1">Personal page</a></li>
            <li><a class="nav-link" href="/admin/images">ADD or EDIT Images</a></li>
            <li><a class="nav-link" href="/admin/categories">ADD or EDIT Categories</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['user']['login'];?>
</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/main">Main sait</a>    
                <a class="dropdown-item" href="/users/logout">Logout</a>
            </li>
        </ul>
    </div>
    </nav>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18759217595ff70387a551d7_22186637', 'body');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_11110097045ff70387a40f68_59865424 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11110097045ff70387a40f68_59865424',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_14972006265ff70387a45010_71881670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_14972006265ff70387a45010_71881670',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_18759217595ff70387a551d7_22186637 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18759217595ff70387a551d7_22186637',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
