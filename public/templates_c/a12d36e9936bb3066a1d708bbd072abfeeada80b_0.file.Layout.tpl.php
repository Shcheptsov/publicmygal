<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 11:54:04
  from 'C:\myProjects\jquery.local\www\Views\Layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd895ccdd96c9_05454491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a12d36e9936bb3066a1d708bbd072abfeeada80b' => 
    array (
      0 => 'C:\\myProjects\\jquery.local\\www\\Views\\Layout.tpl',
      1 => 1608029638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modals/Login.tpl' => 1,
    'file:modals/Register.tpl' => 1,
  ),
),false)) {
function content_5fd895ccdd96c9_05454491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8197647905fd895ccdbde99_22253486', 'title');
?>
</title>
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
    <?php if (!empty($_SESSION['user']['login'])) {?>
        <a class="navbar-brand" href="/main">LOGO</a>
        <?php } else { ?>
        <a class="navbar-brand" href="/main">LOGO</a>    
    <?php }?>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/main">Services1</a>
                    <a class="dropdown-item" href="/main">Services2</a>
                    <a class="dropdown-item" href="/main">Services3</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/main/example">Example <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/main/pricing">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cart">Cart(<?php echo $_smarty_tpl->tpl_vars['cart_count']->value;?>
)</a>
            </li>
            <?php if (!empty($_SESSION['user']['login'])) {?>
                <li><a class="nav-link" href="/orders/all">Orders</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['user']['login'];?>
</a>
            
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/PersonalPage/lk">Profile</a>
                    <a class="dropdown-item" href="/main/contacts">Help</a>
                    <a class="dropdown-item" href="/users/logout">Logout</a>

            </li>
            <?php } else { ?>
                
                <li><a class="nav-link" href="#" data-toggle="modal" data-target="#login">Login</a></li>
                <li><a class="nav-link" href="#" data-toggle="modal" data-target="#register">Register</a></li>
                
            <?php }?>
        </ul>
    </div>
    </nav>
    <?php $_smarty_tpl->_subTemplateRender('file:modals/Login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:modals/Register.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '<script'; ?>
 src="/public/js/users.js"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14837448765fd895ccdd8277_85788916', 'body');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_8197647905fd895ccdbde99_22253486 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8197647905fd895ccdbde99_22253486',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_14837448765fd895ccdd8277_85788916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14837448765fd895ccdd8277_85788916',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
