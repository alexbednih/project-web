<?php

$result = mysql_query("SELECT * FROM news");
if (!$result){
  exit("<p>В базе не обнаружено таблицы проверьте настройки</p>");
}

if (mysql_num_rows($result) == 0){
  exit("Записей нет");
}

for($i = 0; $i<mysql_num_rows($result); $i++)
{
  $row[]=mysql_fetch_array($result,MYSQL_ASSOC);
}