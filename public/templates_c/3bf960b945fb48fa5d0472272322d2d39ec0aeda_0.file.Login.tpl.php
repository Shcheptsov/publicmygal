<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 13:01:26
  from 'C:\myProjects\mygal.local\www\Views\modals\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd8a5965b9b38_85369161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bf960b945fb48fa5d0472272322d2d39ec0aeda' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\modals\\Login.tpl',
      1 => 1608029837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd8a5965b9b38_85369161 (Smarty_Internal_Template $_smarty_tpl) {
?>      <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" style="width :200px; display: none">
                <strong>Error:</strong>
                <span id="massege">massege</span>
        </div>  
        <input type ="text" name = "login" id="login_name" placeholder = "login"><br>
        <input type ="password" name = "pass" id="login_pass" placeholder = "password"><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="makeLogin();" >Login</button>
      </div>
    </div>
  </div>
</div><?php }
}
