
function updateStart(category_id){
    var text = $('#name_' + category_id).text();
    var html = "<input type = 'text' id = 'new_name_" + category_id + "' class='form-control' value ='" + text + "'>";
    $('#name_' + category_id).html(html);
    $('#update_' + category_id).html('<button class = "btn btn-success" onClick="endUpdate(' +category_id + ')">Submit</button>');
}
                        
function endUpdate(category_id){
    var text = $('#new_name_' + category_id).val();

    $.ajax({
        url: "/admin/category_update",
        method: "POST",
        data: {
            id:category_id,
            name:text
        },
        success: function(result){
            console.log(result);
        }
    });
    $('#name_' + category_id).html(text);
    $('#update_' + category_id).html('<button class = "btn btn-warning" onClick="updateStart(' +category_id + ')">Update</button>');
}   
                        
function removeCategory(category_id){   
    $.ajax({
        url: "/admin/category_remove",
        method: "POST",
        data: {
            id:category_id
        },

        success: function(result){

            $('#row_' + category_id).remove();
            console.log(result);
        }
    });
}

function createCategory(){
    var name = $('#new_category').val().trim();
    $('.alert-danger').hide();
    if(name.length === 0){
        $('#massege').text("Not valid name");
        $('.alert-danger').show();
        return;
    }

    $.ajax({
        url: "/admin/category_create",
        method: "POST",
        data: {
            name:name
        },
        success: function(result){
            var html = '<tr id="row_' + result.id + '">' +
                '<td>' + result.id + '</td>' +
                '<td id = "name_' + result.id + '">' + name + '</td>' +
                '<td id = "update_' + result.id + '"><button class="btn btn-warning" onclick="updateStart(' + result.id + ');">Update</button></td>' +
                '<td><button class="btn btn-danger" onclick="removeCategory(' + result.id + ');">Remove</button></td>' +
                '<tr>';
            $('#row_holder').append(html);
        }
    });
}

