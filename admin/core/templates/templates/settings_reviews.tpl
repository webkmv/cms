<form action="add_reviews.php" method="post">
    Введите E-mail: <input type="text" name="email" value="{$reviews.email}">
    <input type="hidden" name="id" value="{$reviews.id}">
    <input type="submit" value="Сохранить" id="btnSaveSettings" />
</form>