{extends file="main.tpl"}
{block name=title}модуль бронирования{/block}
{block name=body}

<a href="windowBookingSettings.php" class="addPage">Настроить</a>

  <table class="modul_table">
  <thead>
  	<tr>
  		<th class="middle">ФИО</th>
                <th class="min">Дата рождения</th>
		<th class="min">Телефон</th>
		<th class="min">email</th>
                <th class="min">Населенный пункт</th>
                <th class="min">Дата заселения</th>
		<th class="min">Количество дней</th>
		<th class="min">Категория</th>
                <th class="min">Взрослых</th>
                <th class="min">Детей</th>
		<th class="middle">Пожелания</th>
                <th class="min">Удалить</th>
	</tr>
	</thead>
	<tbody>
            {foreach $booking as $item}
                <tr>
                    <td>{$item.name}</td>
                    <td>{$item.date_of_birth}</td>
                    <td>{$item.phone}</td>
                    <td>{$item.email}</td>
                    <td>{$item.locality}</td>
                    <td>{$item.date_of_arrival}</td>
                    <td>{$item.number_of_days}</td>
                    <td>{$item.category}</td>
                    <td>{$item.number_of_people}</td>
                    <td>{$item.number_of_child}</td>
                    <td>{$item.wishes}</td>
                    <td class="del"><a href="booking.php?action=delete&id={$item.id}">-</a></td>
                </tr>
            {/foreach}
        </tbody>
  </table>
  
{/block}