{extends file="main.tpl"}
{block name=title}Templates{/block}
{block name=body}
<a href="windowAddTemplate.php" class="addTemplate">Добавить</a> <a href="">На главную</a>

<div>
  <table>
    <tr>
      <td>Название</td><td>Путь</td><td>Дата добавления</td><td></td>
   </tr>
   {foreach $templates as $template}
   <tr>
      <td><a href="view_tpl.php?id={$template.id}">{$template.title}</a></td><td>{$template.path}</td><td>{$template.created}</td><td><a href="delete_template.php?id={$template.id}">Удалить</a></td>
    </tr>
    {/foreach}
  </table>
</div>
{/block}
