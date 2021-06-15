<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-09 19:34:50
  from 'C:\myProjects\mygal.local\www\Views\modals\Delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff9f74a64f001_67612411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fc9cfbc4414c499fc6b99ee80181686d97f9fd3' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\modals\\Delete.tpl',
      1 => 1610217283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff9f74a64f001_67612411 (Smarty_Internal_Template $_smarty_tpl) {
?>      <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Подтверждение    </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" style="width :200px; display: none">
                <strong>Error:</strong>
                <span id="massege">massege</span>
        </div>  
          <h6>Вы действительно хотите удалить?</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="buttonDelete" onclick="deleteImage();" class="btn btn-primary">OK</button>
      </div>
    </div>
  </div>
</div><?php }
}
