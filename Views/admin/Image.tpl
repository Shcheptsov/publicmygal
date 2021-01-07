{extends file="admin/Layout.tpl"}
{block name=title}admin{/block}
{block name=body}
<div class="row">
    <div class="col-4">
        <div class="addImage"> 
            <form action ="/admin/items_create" method = "POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail">description</label><br>
                    <input type ="text" class ="form-conrol" name = "description" placeholder = "description">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">category</label><br>
                    <select name = "category" class="selectpicker form-conrol">
                        {foreach $categories as $category}
                            <option   value="{$category['id_category']}">{$category['kat']}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">Image</label><br>
                    <input type ="file" class ="form-conrol" name = "picture" placeholder = "image">
                </div>
                <button type ="submit" class="btn-success">Enter</button>
            </form>
        </div>
    </div>
    <div class="col-8">
        <h1>выберите категорию</h1>
        <form action ="/admin/images" method = "POST" enctype="multipart/form-data">
            <select id = "selectCategory" onclick="updateImage()" class="selectpicker form-conrol" style="width: 200px">
                            {foreach $categories as $category}
                                <option   value="{$category['id']}">{$category['kat']}</option>
                            {/foreach}
            </select>
        </form>
            <div id="thumbnail"></div>
                <div class="col-sm-6 col-md-3" id="thumbnail1" style=" display:inline-block">
            </div>
            <script type="text/javascript" src="/public/js/updateImage.js"></script>
<script>
    updateImage();
</script>          
    </div>
</div>
{/block}
