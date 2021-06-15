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
        <p><button  id="btn"  class="btn btn-sm btn-outline-primary"  {*disabled="disabled"*} onclick="makeRegister();">Register</button><p>
      </div>
    </div>
  </div>
</div>
    
{* <script>

    $('#group input:checkbox').click(function(){
        if ($(this).is(':checked')) {
                 $('#group input:checkbox').not(this).prop('checked', false);
        }
    });

    $('#check1').add('#check2').on('click', function(){
        if ($(this).is(':checked')){
            $('#btn').removeAttr('disabled');
        }else{
            $('#btn').attr('disabled', 'disabled'); 
        }
    });
    
    function checkRegister{
       if ($('#register_name').val){
           
       }
    }
</script>*}