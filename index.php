<?php

session_start();

//подключение к БД
include_once('bd.php');
include_once 'iAction.php';

//include_once("LoginAction.php");
//подключение Смарти
define('SMARTY_DIR', str_replace("\\", "/", getcwd()).'/smarty/libs/');

require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();

//открытие сессий

//запрос к БД
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
//окончание запроса к БД
//Обработка Гета


define('LOGIN_ACTION', 2);
define('AVT_ACTION', 3)
switch ($_GET['action']) {
  case LOGIN_ACTION:
    break;
  case AVT_ACTION:
    $actionClass = 'AvtAction';
    break;
  default:
    $actionClass = 'LoginAction';
    break;
}
var_dump($actionClass);

//$actionClass = 'LoginAction';
include_once "{$actionClass}.php";


$action = new $actionClass();

$content = $action->render();
var_dump($_SESSION['login']);


//передача переменных шаблонам
$smarty->assign('row',$row);
$smarty->assign('site_name',$site_name);
$smarty->assign('names',$names);
$smarty->assign('avtorizac',$avtorizac);
$smarty->assign('loginn',$_SESSION['login']);
$smarty->assign('temp',$temp);
//подключение к шаблону
$smarty->assign('content', $content);
echo $smarty->fetch('index.tpl');
?>

