{extends file="Layout.tpl"}
{block name=title}Users list{/block}
{block name=body}   
    <table border ="1">
    <thead>
    <th>LOGIN</th>
    <th>PASSWORD</th>
    </thead>
    <tbody>
{foreach $users as  $user }
    <tr>
        <td>{$user['login']}</td>
        <td>{$user['password']}</td>
    </tr>
{/foreach}
{/block}

