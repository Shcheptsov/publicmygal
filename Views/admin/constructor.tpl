{extends file="admin/Layout.tpl"}
    {block name=title}Responsive Image Gallery{/block}
    {block name=head}
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
    <meta name="description" content="Responsive Image Gallery with jQuery" />
    <meta name="keywords" content="jquery, carousel, image gallery, slider, responsive, flexible, fluid, resize, css3" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="/public/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="/public/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/public/css/elastislide.css" />
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />

{/block}
{block name=body}
    <style>
        #block1{
            margin-left: 25%;
            float: left;
            width: 300px;
            height: 400px; 
            background-color: gray
        }
        #block2{
            
            float: left;
            margin-left: 100px;
            width: 300px;
            height: 400px; 
            background-color: gray
        }
        .sortable-ul {
	list-style-type: none; 
	margin: 10px auto; 
	padding: 0; 
	width: 300px;
}
.sortable-ul li {
	margin: 4px 0; 
	padding: 5px 10px; 
	font-size: 16px;
	background: #eee;
	border: 1px solid #e0e0e0;
	border-left: 8px solid #e0e0e0;
}
        
    </style>
    <div id ="block1">
        <ul class="sortable-ul">
            <li><a class="nav-link" href="#" data-toggle="modal" data-target="#logo">Logo</a></li>
            <li>links</li>
            <li>gallery</li>
            <li>map</li>
        </ul>
    </div>
     {include file ='modals/Logo.tpl'}
    
    <div id ="block2">
         block2
    </div>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
$('.sortable-ul').sortable({
	revert: 100
});
</script>
{/block}