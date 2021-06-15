    {*modal 1*}
  <div class="modal fade" id="updateImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Изменить фотографию</h5>
{*        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>*}
      </div>
      <div id ="newform">  
      <div class="modal-body"  id="test">
          <div class="alert alert-danger" style="width :200px; display: none">
                <strong>Error:</strong>
                <span id="massege">massege</span>
        </div>
      </div>
         {* <h6>Вы действительно хотите удалить?{$imageName}</h6>*}
      </div>
      <div class="modal-footer" >
        <button type="button" class="btn btn-secondary" onclick="reboot();" data-dismiss="modal">Close</button>
        <button type="button" id="buttonDelete" onclick="deleteImage();" class="btn btn-primary">OK</button>
      </div>
    </div>
  </div>
</div>