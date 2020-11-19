<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" xml:lang="ru">
<head>
    <title>Inherit it!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
  <p>
    <strong>Выберите страницу:</strong>
    {foreach from=$pages item=page key=link}
        [<a href="?page={$link|escape}">{$page|escape}</a>]
    {/foreach}  
  </p>
  <hr />
  <p>
    {block name="foo"}Это самый корневой блок FOO{/block}
  </p>
</body>
</html>