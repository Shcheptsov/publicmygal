<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-19 11:44:02
  from 'C:\myProjects\mygal.local\www\Views\Layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb64c7274b0b3_43334244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce0134e0ffa2d4f971f660fde1acff46309c9124' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\Layout.tpl',
      1 => 1605191470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb64c7274b0b3_43334244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17931371125fb64c726fd788_64601199', 'title');
?>
</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        <a class="navbar-brand" href="/PersonalPage/main">LOGO</a>
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
            <?php if (!empty($_SESSION['user']['login'])) {?>
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

                <li class="nav-item"><a class="nav-link" href="/users/login">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="/users/register">Register</a></li>
                
            <?php }?>
        </ul>
    </div>
    </nav>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_971361765fb64c7274a4e7_73177719', 'body');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_17931371125fb64c726fd788_64601199 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17931371125fb64c726fd788_64601199',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_971361765fb64c7274a4e7_73177719 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_971361765fb64c7274a4e7_73177719',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
