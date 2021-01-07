<!DOCTYPE html>
<head>
  <title>{block name=title}Default Page Title{/block}</title>
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
  </head>>
  <body>
    <div class="content">
            <h1>Juliya_pm.yar 
                <span>
                    {foreach $categories as  $category }
                    <a href="/view/{$smarty.session.user.login}?kat={$category['id']}">{$category['kat']}</a>||
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
                            <ul>{foreach $images as $imege}
                                <li><a href="#"><img src="/Users/{$imege['login']}/{$imege['imageDir']}/thumbs/{$imege['imageName']}{$imege['imageType']}" data-large="/Users/{$imege['login']}/{$imege['imageDir']}/{$imege['imageName']}{$imege['imageType']}" alt="image01" data-description="From off a hill whose concave womb reworded" /></a></li>
                                {/foreach}
                            </ul>
                        </div>
                    </div>
                    <!-- End Elastislide Carousel Thumbnail Viewer -->
                </div><!-- rg-thumbs -->
            </div><!-- rg-gallery -->
            <p class="sub">Want more Shakespeare? <a href="http://www.opensourceshakespeare.org/" target="_blank">http://www.opensourceshakespeare.org/</a></p>
        </div><!-- content -->
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/jquery.tmpl.min.js"></script>
    <script type="text/javascript" src="/public/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/public/js/jquery.elastislide.js"></script>
    <script type="text/javascript" src="/public/js/gallery.js"></script>
    </body>
</html>