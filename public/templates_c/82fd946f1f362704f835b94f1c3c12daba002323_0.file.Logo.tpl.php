<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-12 16:07:21
  from 'C:\myProjects\mygal.local\www\Views\modals\Logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c4bf999498a3_39916028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82fd946f1f362704f835b94f1c3c12daba002323' => 
    array (
      0 => 'C:\\myProjects\\mygal.local\\www\\Views\\modals\\Logo.tpl',
      1 => 1623503716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c4bf999498a3_39916028 (Smarty_Internal_Template $_smarty_tpl) {
?>      <div class="modal fade" id="logo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="max-width: 900px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">logo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" style="width :400px; display: none">
                <strong>Error:</strong>
                <span id="massege">massege</span>
        </div>  
          
                <div class="addImage"> 
            <form action ="/admin/imagesLogo" method = "POST" enctype="multipart/form-data">
   
                <div class="form-group">
                    <label for="exampleInputEmail">Image</label><br>
                    <input type ="file" class ="form-conrol" name = "picture" placeholder = "image">
                </div>
                <button type ="submit" class="btn-success">Enter</button>
            </form>
        </div>
                    
                    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="logo();" >Save</button>
      </div>
    </div>
  </div>
</div><?php }
}
