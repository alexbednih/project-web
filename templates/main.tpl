{if $temp==2}
	<p>Сайт разработал Бедных Алексей Олегович</p>
	<p>Телефон: +7-950-333-14-40</p>
	<p>e-mail: alexbednih@gmail.com</p>
{elseif $temp==4}
	<h2>Регистрация</h2>
    	<form action="index.php?action=5" method="post">
	   <p>
    	      <label>Ваш логин:<br></label>
    	      <input name="login" type="text" size="15" maxlength="15">
    	   </p>
	   <p>
    	      <label>Ваш пароль:<br></label>
    	      <input name="password" type="password" size="15" maxlength="15">
    	   </p>
	   <p>
    	      <input type="submit" name="submit" value="Зарегистрироваться">
	   </p>
	</form>
{else}
	{foreach $row as $item}
	<hr>{$item.id_news} запись: 
	{$item.name}<br><br>
	{$item.body}<br><br>
	{if isset($loginn)}
  	   <a href="editst.php?id_news=$news">Редактировать запись</a><a href="delst.php">Удалить запись</a>
	{/if}
{/foreach}
{/if}
