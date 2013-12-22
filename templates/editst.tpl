{if isset($loginn)}
<p align="center">Редактирование записи</p>
<br>
<form id="add" action="index.php?action=7&idnews={$idnews}" method="post">
    <p><label>Название записи</label></p>
    <p><input type="text" maxlength="25" size="20" name="name" value="{$name}"></p>
    <p><label>Текст записи</label></p>
    <p><textarea cols="25" pows="20" name="body">{$body}</textarea></p>
    <p><input type="submit"  value="Редактировать" name="submit"></p>
</form>
{else}
<p>Вы не авторизованы! Войдите или зарегистрируйтесь.</p>
{/if}