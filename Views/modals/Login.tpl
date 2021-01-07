    {*modal 1*}
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div>