<html>
<head>
  <title>{block name=title}Default Page Title{/block}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    {if !empty($smarty.session.user.login)}
        <a class="navbar-brand" href="/main">LOGO</a>
        {else}
        <a class="navbar-brand" href="/main">LOGO</a>    
    {/if}
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Services1</a>
                    <a class="dropdown-item" href="#">Services2</a>
                    <a class="dropdown-item" href="#">Services3</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/main/example">Example <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/main/pricing">Pricing</a>
            </li>
            {if !empty($smarty.session.user.login)}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {$smarty.session.user.login}</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/admin/personal/1">Profile</a>
                    <a class="dropdown-item" href="/main/contacts">Help</a>
                    <a class="dropdown-item" href="/users/logout">Logout</a>
                </div>
            </li>
            {else}
                <li><a class="nav-link" href="#" data-toggle="modal" data-target="#login">Login</a></li>
                <li><a class="nav-link" href="#" data-toggle="modal" data-target="#register">Register</a></li>
            {/if}
        </ul>
    </div>
    </nav>
    {include file ='modals/Login.tpl'}
    {include file ='modals/Register.tpl'}
    <script src="/public/js/users.js"></script>
{block name=body}{/block}
</body>
</html>