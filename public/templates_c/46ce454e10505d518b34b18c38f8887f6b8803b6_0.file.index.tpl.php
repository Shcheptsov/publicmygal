<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-15 11:48:22
  from 'C:\myProjects\mygal.local\www\Views\admin\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c87766d4e180_44495269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46ce454e10505d518b34b18c38f8887f6b8803b6' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\admin\\index.tpl',
      1 => 1623750494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c87766d4e180_44495269 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19252148460c87766d066a9_16664130', 'title');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136704832960c87766d08557_89576726', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11805647160c87766d22787_77129243', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "admin/Layout.tpl");
}
/* {block 'title'} */
class Block_19252148460c87766d066a9_16664130 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19252148460c87766d066a9_16664130',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Responsive Image Gallery<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_136704832960c87766d08557_89576726 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_136704832960c87766d08557_89576726',
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
    <noscript>
    <style>
            .es-carousel ul{
                    display:block;
            }
    </style>
    </noscript>
    <?php echo '<script'; ?>
 id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
        <div class="rg-image-wrapper">
        <?php ob_start();
if ('itemsCount' > 1) {
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

        <div class="rg-image-nav">
        <a href="#" class="rg-image-nav-prev">Previous Image</a>
        <a href="#" class="rg-image-nav-next">Next Image</a>
        </div>
        <?php ob_start();
}
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

        <div class="rg-image"></div>
        <div class="rg-loading"></div>
        <div class="rg-caption-wrapper">
        <div class="rg-caption" style="display:none;">
        <p></p>
        </div>
        </div>
        </div>
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_11805647160c87766d22787_77129243 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11805647160c87766d22787_77129243',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="block" id="block1">
        <img src="/Users/<?php echo $_SESSION['user']['login'];?>
/logo/logo<?php echo $_smarty_tpl->tpl_vars['logoType']->value;?>
" data-large="/Users/admin/logo/logo.png" alt="image01" data-description="From off a hill whose concave womb reworded" />
    </div>
    <div class="block" id="block3">
            <h1>Text logo
                <span>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                    <a href="/admin/personal/<?php echo $_smarty_tpl->tpl_vars['category']->value['id_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['kat'];?>
</a>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                   </span>
            </h1>
            <div id="rg-gallery" class="rg-gallery">
                <div class="rg-thumbs">
                    <!-- Elastislide Carousel Thumbnail Viewer -->
                    <div class="es-carousel-wrapper">
                        <div class="es-nav">
                            <span class="es-nav-prev">Previous</span>
                            <span class="es-nav-next">Next</span>
                        </div>
                        <div class="es-carousel">
                            <ul>
                                <?php if ((isset($_smarty_tpl->tpl_vars['imageExample']->value))) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imageExample']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                                        <li><a href="#"><img src="/Users/image_example/<?php echo $_smarty_tpl->tpl_vars['image']->value['imageDir'];?>
/thumbs/<?php echo $_smarty_tpl->tpl_vars['image']->value['imageName'];
echo $_smarty_tpl->tpl_vars['image']->value['imageType'];?>
" data-large="/Users/image_example/<?php echo $_smarty_tpl->tpl_vars['image']->value['imageDir'];?>
/<?php echo $_smarty_tpl->tpl_vars['image']->value['imageName'];
echo $_smarty_tpl->tpl_vars['image']->value['imageType'];?>
" alt="image01" data-description="TODO description DB" /></a></li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                                
                                <?php if ((isset($_smarty_tpl->tpl_vars['items']->value))) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                        <li><a href="#"><img src="/Users/<?php echo $_SESSION['user']['login'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['imageDir'];?>
/thumbs/<?php echo $_smarty_tpl->tpl_vars['item']->value['imageName'];
echo $_smarty_tpl->tpl_vars['item']->value['imageType'];?>
" data-large="/Users/<?php echo $_SESSION['user']['login'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['imageDir'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['imageName'];
echo $_smarty_tpl->tpl_vars['item']->value['imageType'];?>
" alt="image01" data-description="TODO description DB" /></a></li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                    <!-- End Elastislide Carousel Thumbnail Viewer -->
                </div><!-- rg-thumbs -->
            </div><!-- rg-gallery -->
        </div><!-- content -->
    
    <?php echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery.tmpl.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery.elastislide.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/public/js/gallery.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'body'} */
}
