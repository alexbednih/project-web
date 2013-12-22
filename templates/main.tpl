{$i=1}
{foreach $row as $item}
	<hr>{$i} запись: 
	{$item.name}<br><br>
	{$item.body}<br><br>
	{if isset($loginn)}
  	   <a href="index.php?id_news={$item.id_news}">Редактировать запись</a>
  	   <a href="index.php?action=8&idnews={$item.id_news}">Удалить запись</a>
	{/if}
	{$i=$i+1}
{/foreach}
