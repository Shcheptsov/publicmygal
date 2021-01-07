    function updateImage(){
        var name = $("#selectCategory option:selected").text();
        $.ajax({
            url: "/admin/imagesUpdate",
            method: "POST",
            data: {
                name:name
            },
            success: function(result){
                 console.log(result);
                var test = document.querySelectorAll('.col-md-3');
                for( var i = 0; i < test.length; i++ ){
                  test[i].outerHTML = "";
                }
                $.each(result.success.res,function(index,value){
                    var html ='<div class="col-sm-6 col-md-3" style=" display:inline-block">' +
                    '<img src="/Users/'+value.login+'/'+value.category_id+'/'+value.imageName+''+value.imageType+'" alt="..." style=" max-width:200px">' +
                    '<div class="caption">'+
                    '<p>discription:'+ value.imageText +'</p>'+
                    '<p><a href="#"  class="btn btn-primary" role="button">Изменить</a>'+
                    '<a href="#" id="remove_'+value.imageName+'" class="btn btn-default" role="button">Удалить</a></p> </div> </div>';
                    $('#thumbnail').append(html);
                     console.log('Индекс: ' + index + '; Значение: ' + value.id);
                });
                
            }
        });
    }