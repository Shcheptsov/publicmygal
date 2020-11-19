{extends file="Layout.tpl"}
{block name=title}Personal page{/block}
{block name=body}   
                {if !empty($smarty.session.user.login)}
                        <h1>Personal page</h1>
            {else}

            {/if}

{/block}

