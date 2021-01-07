<!DOCTYPE html>
<head>
  <title>{block name=title}Default Page Title{/block}</title>
    {block name=head}{/block}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/admin/personal/1">LOGO</a>    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li><a class="nav-link" href="/admin/personal/1">Personal page</a></li>
            <li><a class="nav-link" href="/admin/images">ADD or EDIT Images</a></li>
            <li><a class="nav-link" href="/admin/categories">ADD or EDIT Categories</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {$smarty.session.user.login}</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/main">Main sait</a>    
                <a class="dropdown-item" href="/users/logout">Logout</a>
            </li>
        </ul>
    </div>
    </nav>
{block name=body}{/block}
</body>
</html>