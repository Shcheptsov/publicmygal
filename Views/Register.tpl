
{extends file="Layout.tpl"}
{block name=title}Registretion{/block}
{block name=body}   
         <h1>Registretion</h1>
                 <form action ="/users/register" method = "POST">
                 <input type ="text" name = "login" placeholder = "login"><br>
                 <input type ="text" name = "mail" placeholder = "mail"><br>
                 <input type ="password" name = "pass" placeholder = "password"><br>
                 <input type ="submit" value = "register">
                 </form>
{/block}

