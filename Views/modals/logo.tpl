    {*modal 1*}
  <div class="modal fade" id="logo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div>