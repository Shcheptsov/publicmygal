{extends template="child.tpl"}
  {block name="bar"}
    <br /><em style="margin-left:30px">Здесь мы перекрываем значение блока BAR у шаблона, от которого наследуемся. В данном случае - от CHILD</em>
  {/block}
{/extends}