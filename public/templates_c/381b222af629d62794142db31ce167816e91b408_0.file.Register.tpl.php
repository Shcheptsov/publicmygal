<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-15 11:46:15
  from 'C:\myProjects\mygal.local\www\Views\modals\Register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c876e76fdaa6_64749859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '381b222af629d62794142db31ce167816e91b408' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\modals\\Register.tpl',
      1 => 1623750371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c876e76fdaa6_64749859 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="container">
  <div class="row">
      <div class="col">
         <input type ="text" id="register_name" name = "login" placeholder = "login"><br>
         <input type ="text" id="register_mail" name = "mail" placeholder = "mail"><br>
         <input type ="password" id="register_pass" name = "pass" placeholder = "password"><br>
      </div>
    <div class="col" id="checkboxs">
        <div id="group" class="text-left">
            <input type="checkbox" id="check1">Индивидуальная страница<br>
            <input type="checkbox" id="check2" class='check'>Организация
        </div>
        <div id="warning">    
        <div>
    </div>
  </div>

      <div class="modal-footer">
        <button class="btn btn-sm btn-outline-primary" data-dismiss="modal">Close</button>
        <p><button  id="btn"  class="btn btn-sm btn-outline-primary"   onclick="makeRegister();">Register</button><p>
      </div>
    </div>
  </div>
</div>
    
<?php }
}
