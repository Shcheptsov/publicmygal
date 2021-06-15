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
    <noscript>
    <style>
            .es-carousel ul{
                    display:block;
            }
    </style>
    </noscript>
    <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
        <div class="rg-image-wrapper">
        {{if itemsCount > 1}}
        <div class="rg-image-nav">
        <a href="#" class="rg-image-nav-prev">Previous Image</a>
        <a href="#" class="rg-image-nav-next">Next Image</a>
        </div>
        {{/if}}
        <div class="rg-image"></div>
        <div class="rg-loading"></div>
        <div class="rg-caption-wrapper">
        <div class="rg-caption" style="display:none;">
        <p></p>
        </div>
        </div>
        </div>
    </script>
{/block}
{block name=body}
    <div class="block" id="block1">
        <img src="/Users/{$smarty.session.user.login}/logo/logo{$logoType}" data-large="/Users/admin/logo/logo.png" alt="image01" data-description="From off a hill whose concave womb reworded" />
    </div>
    <div class="block" id="block3">
            <h1>Text logo
                <span>
                    {foreach $categories as  $category }
                    <a href="/admin/personal/{$category['id_category']}">{$category['kat']}</a>
                    {/foreach}
                   {*вывод из бд*}
                </span>
            </h1>
            <div id="rg-gallery" class="rg-gallery">
                <div class="rg-thumbs">
                    <!-- Elastislide Carousel Thumbnail Viewer -->
                    <div class="es-carousel-wrapper">
                        <div class="es-nav">
                            <span class="es-nav-prev">Previous</span>
                            <span class="es-nav-next">Next</span>
                        </div>
                        <div class="es-carousel">
                            <ul>
                                {if isset($imageExample)}
                                    {foreach $imageExample as  $image }
                                        <li><a href="#"><img src="/Users/image_example/{$image['imageDir']}/thumbs/{$image['imageName']}{$image['imageType']}" data-large="/Users/image_example/{$image['imageDir']}/{$image['imageName']}{$image['imageType']}" alt="image01" data-description="TODO description DB" /></a></li>
                                    {/foreach}
                                {/if}
                                
                                {if isset($items)}
                                    {foreach $items as  $item }
                                        <li><a href="#"><img src="/Users/{$smarty.session.user.login}/{$item['imageDir']}/thumbs/{$item['imageName']}{$item['imageType']}" data-large="/Users/{$smarty.session.user.login}/{$item['imageDir']}/{$item['imageName']}{$item['imageType']}" alt="image01" data-description="TODO description DB" /></a></li>
                                    {/foreach}
                                {/if}
                            </ul>
                        </div>
                    </div>
                    <!-- End Elastislide Carousel Thumbnail Viewer -->
                </div><!-- rg-thumbs -->
            </div><!-- rg-gallery -->
{*            <p class="sub">Want more Shakespeare? <a href="http://www.opensourceshakespeare.org/" target="_blank">http://www.opensourceshakespeare.org/</a></p>
*}        </div><!-- content -->
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/jquery.tmpl.min.js"></script>
    <script type="text/javascript" src="/public/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/public/js/jquery.elastislide.js"></script>
    <script type="text/javascript" src="/public/js/gallery.js"></script>
{/block}