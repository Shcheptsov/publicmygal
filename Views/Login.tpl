{extends file="Layout.tpl"}
{block name=title}login{/block}
{block name=body}   
         <h1>Login</h1>
            <form action ="/users/login" method = "POST">
                 <input type ="text" name = "login" placeholder = "login"><br>
                 <input type ="password" name = "pass" placeholder = "password"><br>
                 <input type ="submit" value = "login">
            </form>
{/block}

