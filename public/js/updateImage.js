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
                var newImage = new Image();
                newImage.src = '/Users/'+value.login+'/'+value.category_id+'/'+value.imageName+''+value.imageType+'?'+ new Date().getTime();
                var categoryImage = [value.category_id, value.imageName];
                var html ='<div class="col-sm-6 col-md-3" style=" display:inline-block">' +
                '<img src="'+newImage.src+'" alt="..." style=" max-width:200px">' +
                '<div class="caption">'+
                '<p>discription:'+ value.imageText +'</p>'+
                '<p><a href="#"  data-toggle="modal" data-target="#updateImage" class="btn btn-primary" role="button" onClick ="changeImage(\''+value.category_id+'\',\''+value.login+'\',\''+value.imageName+'\',\''+value.imageType+'\',\''+value.imageText+'\')">Изменить</a>'+
                '<a  href="#"  id="remove_'+value.imageName+'" onClick ="deleteImage(\''+value.category_id+'\',\''+value.imageName+'\',\'' +value.imageType+'\')"  class="btn btn-default" role="button">Удалить</a></p> </div> </div>';
                $('#thumbnail').append(html);
                 console.log('Индекс: ' + index + '; Значение: ' + value.id);
            });  
        }
    });
}
    
function changeImage(category_id, login, imageName, imageType,imageText ){
    var category_id = category_id;
    var imageName = imageName;
    var imageType = imageType;
    var imageText = imageText;
    var login = login;
    $('#test').empty();
    var html =
    '<input type ="file" id="image1">'+     
    '<img src="/Users/'+login+'/'+category_id+'/'+imageName+''+imageType+'" alt="..." style=" max-width:200px">'+
    '<input type="button" onClick ="updatePic(\''+login+'\',\''+category_id+'\',\''+imageName+'\',\'' +imageType+'\',\''+imageText+'\')">'+
     '<input type ="text"  value="'+imageText+'">';
    $('#test').append(html);
}    

function updatePic(login, category_id,  imageName, imageType, imageText){
   var login = login;
   var category_id = category_id;
   var imageName = imageName;
   var imageType = imageType;
   var imageText = imageText;

  var file = $('#image1');// элемент, с помощью которого пользователь выбирает файл
  if (file.prop('files').length) { // если файл выбран, то
    var formData = new FormData( document.querySelector('form') );    // создаём объект FormData
    formData.append('file', file.prop('files')[0]);   // добавляем в объект FormData файл 
    formData.append('login', login);
    formData.append('category_id', category_id);
    formData.append('imageName', imageName);
    formData.append('imageType', imageType);
    for(var pair of formData.entries()) {
      console.log(pair[0]+ ' = '+ pair[1]); 
    }

    $.ajax({
      url: '/admin/updatePicture',
      data:formData,
      processData: false,
      contentType: false,
      type: 'POST',
      success: function(data) {
          var newImage = new Image();
            newImage.src = '/Users/'+login+'/'+category_id+'/'+imageName+''+imageType+'?'+ new Date().getTime();
            $('#test').remove();
          var html =
        '<div class="modal-body"  id="test">'+
        '<input type ="file" id="image1">'+      
        '<img src="'+newImage.src+'" alt="..." style=" max-width:2000px">'+
        '<input type="button" onClick ="updatePic(\''+login+'\',\''+category_id+'\',\''+imageName+'\',\'' +imageType+'\')"></div>' +
        '<input type ="text"  value="'+imageText+'">';
        $('#newform').append(html);
        updateImage();
        
      }
    });
  } else {
    alert(0);
  }
}

function deleteImage(category_id, imageName, imageType){
    var category_id = category_id;
    var imageName = imageName;
    var imageType = imageType;
    if (confirm('Вопрос')) { 
        $.ajax({
        url: "/admin/imagesRemove",
        method: "POST",
        dataType:"json",
        data: {
            category_id:category_id,
            imageName:imageName,
            imageType:imageType
        },
        success: function(result){
            console.log(result);
            updateImage();
        }
    });
    }
}

function logo(){
    console.log('login');
}