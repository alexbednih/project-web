<?php

session_start();

include_once 'bd.php';
include_once 'iAction.php';
include_once 'zdb.php';

define('SMARTY_DIR', str_replace("\\", "/", getcwd()).'/smarty/libs/');

require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();

$loginn=$_SESSION['login'];

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
    break;
  case 4:
    $actionClass = 'RegAction';
    include_once "{$actionClass}.php";
    $action = new $actionClass();
    $comtent = $action->render();      
    break;  
  case 41:
    $actionClass = 'SaveuserAction';
    include_once "{$actionClass}.php";
    $action = new $actionClass();
    $comtent = $action->render();      
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

