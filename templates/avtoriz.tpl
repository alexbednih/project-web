{if $avtorizac==0}
<form action="index.php?action=3" method="post">
<input type="hidden" name="seenform" value="y">
<label>Авторизация</label>
<p><strong>Логин:</strong></p>
<p><input type="text" maxlength="25" size="20" name="login"></p>
<p><strong>Пароль:</strong></p>
<p><input type="password" maxlength="25" size="20" name="password"></p>
<p><input type="submit" value="Войти" name="submit"></p>
<a href="index.php?action=4">Зарегистрироваться</a> 
</form>
Вы вошли на сайт, как гость
{else}
Вы вошли на сайт, как {$loginn}
<form action="vih.php" method="post">
    <p><input type="submit" value="Выйти" name="submit"></p>
{/if}