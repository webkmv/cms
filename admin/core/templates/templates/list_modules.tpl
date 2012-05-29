{extends file="main.tpl"}
{block name=body}

  <table class="modul_table">
  <thead>
  	<tr>
  		<th class="middle">Название</th>

		<th class="min">Публиковать</th>
		<th class="min">Удалить</th>
	</tr>
	</thead>
	<tbody>
            {foreach $modules as $module}
                <tr>
                    <td><a href="{$module.path}">{$module.title}</a></td>
                    <td>{$module.published}</td>
                    <td class="del"><a href="#">-</a></td>
                </tr>
            {/foreach}
        </tbody>
  </table>

{/block}