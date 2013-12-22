{if isset($loginn)}
<p align="center">Добавление записи</p>
<br>
<form id="add" action="index.php?action=6" method="post">
    <p><label>Введите название записи</label></p>
    <p><input type="text" maxlength="25" size="20" name="name"></p>
    <p><label>Введите текст записи</label></p>
    <p><textarea cols="25" pows="20" name="body"></textarea></p>
    <p><input type="submit"  value="Добавить" name="submit"></p>
</form>
{else}
<p>Вы не авторизованы! Войдите или зарегистрируйтесь.</p>
{/if}