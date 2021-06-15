{extends file="admin/Layout.tpl"}
{block name=title}admin{/block}
{block name=body}
<table class="table">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Update</th>
        <th>Remove</th>
    </thead>
        <tbody id="row_holder">
        {foreach $categories as $category}      
            <tr id="row_{$category['id']}">
            <td>{$category['id']}</td>
            <td id = "name_{$category['id']}">{$category['kat']}</td>
            <td id = "update_{$category['id']}"><button class="btn btn-warning" onclick="updateStart({$category['id']});">Update</button></td>
            <td><button class="btn btn-danger" onclick="removeCategory({$category['id']});">Remove</button></td>
            <tr>
        {/foreach}
        </tbody>
</table>
<h1>Create new</h1>
<div class="alert alert-danger" style="width :200px; display: none">
    <strong>Error:</strong>
    <span id="massege">massege</span>
</div>

<input type ="text" id="new_category" name="name">
<button class = "btn btn-warning" onClick="createCategory();" >Create</button>
<script src="/public/js/categories.js"></script>

{/block}
