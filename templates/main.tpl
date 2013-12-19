
{foreach $row as $item}
	<hr>{$item.id_news} запись: 
	{$item.name}<br><br>
	{$item.body}<br><br>
	{if isset($loginn)}
  	   <a href="editst.php?id_news=$news">Редактировать запись</a><a href="delst.php">Удалить запись</a>
	{/if}
{/foreach}
