<form action="add_booking_mail.php" method="post">
    Введите E-mail: <input type="text" name="email" value="{$booking.email}">
    <input type="hidden" name="id" value="{$booking.id}"><br />
        
    Отправлять на почту данные о бронировании:
    <select name="send_report">
        {if ($booking.send_report == 0)}
            <option value=0>Нет</option>
            <option value=1>Да</option>
        {elseif ($booking.send_report == 1)}
            <option value=1>Да</option>
            <option value=0>Нет</option>
        {/if}
    </select><br />
    
    <input type="submit" value="Сохранить" />
</form>