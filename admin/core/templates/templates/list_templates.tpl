{extends file="main.tpl"}
{block name=title}Templates{/block}
{block name=body}
<a href="">Добавить</a><a href="">На главную</a>

<div>
  <table>
    <tr>
      <td>Название</td><td>Путь</td><td>Дата добавления</td><td></td>
   </tr>
   {foreach $templates as $template}
   <tr>
      <td>{$template.title}</td><td>{$template.path}</td><td>{$template.created}</td><td>Удалить</td>
    </tr>
    {/foreach}
  </table>
</div>
{/block}