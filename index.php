<?php

session_start();

//подключение к БД
include_once 'bd.php';
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

$loginn=$_SESSION['login'];

//define('LOGIN_ACTION', 2);
//define('AVT_ACTION', 3)
switch ($_GET['action']) {
  case 2://LOGIN_ACTION:
    $site_name = 'Название - Об авторе';
    $actionClass = 'AboutAction';
    include_once "{$actionClass}.php";
    $action = new $actionClass();
    $comtent = $action->render();
    break;
  case 3://AVT_ACTION:
    $actionClass = 'AvtAction';
    include_once "{$actionClass}.php";
    $action = new $actionClass();
    $comtent = $action->render();   
    //$_POST['login'],$_POST['password'],$names
    break;
  case 4:
    
    break;  
  case 5://ADD_STAT
    $site_name = 'Название - Добавление записи';
    $actionClass = 'AddAction';
    include_once "{$actionClass}.php";
    $action = new $actionClass();
    $comtent = $action->render();   
    break; 
  case 6:
    $site_name = 'Название - Добавление записи';
    $actionClass = 'AddstatAction';
    include_once "{$actionClass}.php";
    $action = new $actionClass();
    $comtent = $action->render();    
    break;
  default:
    $actionClass = 'IndexAction';
    include_once "{$actionClass}.php";
    $action = new $actionClass();
    $comtent = $action->render($row,$loginn);  
    break;
}
$actionClass = 'LoginAction';
include_once "{$actionClass}.php";
$action = new $actionClass();
$content = $action->render();

//var_dump($loginn);


//передача переменных шаблонам
$smarty->assign('row',$row);
$smarty->assign('site_name',$site_name);
$smarty->assign('names',$names);
$smarty->assign('avtorizac',$avtorizac);
$smarty->assign('loginn',$loginn);
$smarty->assign('temp',$temp);
//подключение к шаблону
$smarty->assign('comtent', $comtent);
$smarty->assign('content', $content);
$smarty->assign('conntent',$conntent);
echo $smarty->fetch('index.tpl');
?>

