<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-18 16:19:14
  from 'C:\myProjects\mygal.local\www\Views\modals\updateImage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6005a6f26795a2_74564777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9525c992a459daf82a47c65096e0a17e1d5f3e74' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\modals\\updateImage.tpl',
      1 => 1610983130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6005a6f26795a2_74564777 (Smarty_Internal_Template $_smarty_tpl) {
?>      <div class="modal fade" id="updateImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Изменить фотографию</h5>
      </div>
      <div id ="newform">  
      <div class="modal-body"  id="test">
          <div class="alert alert-danger" style="width :200px; display: none">
                <strong>Error:</strong>
                <span id="massege">massege</span>
        </div>
      </div>
               </div>
      <div class="modal-footer" >
        <button type="button" class="btn btn-secondary" onclick="reboot();" data-dismiss="modal">Close</button>
        <button type="button" id="buttonDelete" onclick="deleteImage();" class="btn btn-primary">OK</button>
      </div>
    </div>
  </div>
</div><?php }
}
