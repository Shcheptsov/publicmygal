    {*modal 2*}
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div>