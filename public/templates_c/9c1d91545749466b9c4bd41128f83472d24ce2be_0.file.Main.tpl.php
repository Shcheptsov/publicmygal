<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-11 15:57:19
  from 'C:\myProjects\mvc.local\www\Views\Main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd388cf2566f5_08280060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c1d91545749466b9c4bd41128f83472d24ce2be' => 
    array (
      0 => 'C:\\myProjects\\mvc.local\\www\\Views\\Main.tpl',
      1 => 1607516207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd388cf2566f5_08280060 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7420587335fd388ce7ccbc5_82408835', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11492821935fd388ce7cf888_63144208', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layout.tpl");
}
/* {block 'title'} */
class Block_7420587335fd388ce7ccbc5_82408835 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7420587335fd388ce7ccbc5_82408835',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
main<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_11492821935fd388ce7cf888_63144208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11492821935fd388ce7cf888_63144208',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
<div class="container-fluid">
      <div class="row">
        <header class="col-md-3">
          <nav class="sidebar-sticky navbar-expand-md">
            <a href="#" class="logo navbar-brand">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto flex-column">
                <li class="nav-item active">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>                     
                    <a href="/categories/items/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="nav-link"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
                
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </li>
              </ul>
            </div>
          </nav>
        </header>
        <!-- end header -->

        <main class="col-md-9">
          <div class="row">
                                  <?php if (!empty($_smarty_tpl->tpl_vars['items']->value)) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
              <img src="public/images/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
.jpg" alt="...">
      <div class="caption">
        <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</p>
        <p>Price: <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</p>
        <p><a href="/cart/add?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-primary" role="button">Add to cart</a>
           <a href="#" class="btn btn-default" role="button">Info</a></p>
      </div>
    </div>
  </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              <?php } else { ?>
                        No items
                    <?php }?>
</div>
        </main>
        <!-- end main -->
      </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
