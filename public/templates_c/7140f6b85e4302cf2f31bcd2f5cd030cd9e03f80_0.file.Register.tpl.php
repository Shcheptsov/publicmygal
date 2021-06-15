<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 11:47:26
  from 'C:\myProjects\jquery.local\www\Views\modals\Register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd8943e3ce768_34353492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7140f6b85e4302cf2f31bcd2f5cd030cd9e03f80' => 
    array (
      0 => 'C:\\myProjects\\jquery.local\\www\\Views\\modals\\Register.tpl',
      1 => 1608029075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd8943e3ce768_34353492 (Smarty_Internal_Template $_smarty_tpl) {
?>          <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                 <input type ="text" id="register_name" name = "login" placeholder = "login"><br>
                 <input type ="text" id="register_mail" name = "mail" placeholder = "mail"><br>
                 <input type ="password" id="register_pass" name = "pass" placeholder = "password"><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="makeRegister();">Register</button>
      </div>
    </div>
  </div>
</div><?php }
}
