{extends template="parent.tpl"}
  {block name="foo"}
    Это прямой потомок FOO своего родителя, или, проще говоря, дитё :)<br />
    В нём мы определяем блок BAR, который в текущем шаблоне пуст, но в наследуемых может переопределяться.<br />
    {block name="bar"}{/block}
  {/block}
{/extends}