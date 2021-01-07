 function makeLogin(){
      $('.alert-danger').hide();
            var name = $('#login_name').val();
            var pass = $('#login_pass').val();
            var data ={
                login:name,
                pass:pass
            };
            $.post('/users/login', data, function(res){
                if(res.success){
                    location='/admin/personal/1';
                }else{
                    $('.alert-danger').show();
                }
            });
        }
        
        function makeRegister(){
            $('.alert-danger').hide();
            var name = $('#register_name').val();
            var pass = $('#register_pass').val();
            var mail = $('#register_mail').val();
            var data ={
                login:name,
                pass:pass,
                mail:mail
            };
//            ajax короткий запрос
            $.post('/users/register', data, function(res){
                   if(res.success){
                    location='/admin/personal/1';
                }else{
                    $('.alert-danger').show();
                }
            });
        }