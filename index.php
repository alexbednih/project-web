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
    break;
  case 3://AVT_ACTION:
    $actionClass = 'AvtAction';
    break;
  case 4:
    $actionClass = 'RegAction';
    break;  
  case 41:
    $actionClass = 'SaveuserAction';
    break;      
  case 5://ADD_STAT
    $site_name = 'Название - Добавление записи';
    $actionClass = 'AddAction';
    break; 
  case 6:
    $site_name = 'Название - Добавление записи';
    $actionClass = 'AddstatAction';
    break;
  case 7:
    $site_name = "Назавание - Редактирование записи";
    $actionClass = 'EditstAction';
    $idnews=$_GET['idnews'];
    break;  
  case 8:
    $actionClass = 'DelAction';
    $idnews=$_GET['idnews'];
    break;
  default:
    $actionClass = 'IndexAction';
    break;
}

  if ($_GET['action']==7) {
      include_once "{$actionClass}.php";
      $action = new $actionClass();
      $editstat = $action->render($idnews);
  }
    elseif ($_GET['action']==8) {
      include_once "{$actionClass}.php";
      $action = new $actionClass();
      $comtent = $action->render($idnews,$loginn);
  }
    elseif ($_GET['id_news']==NULL) {
    include_once "{$actionClass}.php";
    $action = new $actionClass();
    $comtent = is_null($_GET['action']) ? $action->render($row,$loginn) : $action->render($loginn);
  } 
  else{
    $site_name = "Назавание - Редактирование записи";
    $actionClass = 'EditstatAction';
    include_once "{$actionClass}.php";
    $action = new $actionClass();
    $editstat = $action->render($_GET['id_news'],$loginn);
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
$smarty->assign('editstat', $editstat);
$smarty->assign('content', $content);
$smarty->assign('conntent',$conntent);
echo $smarty->fetch('index.tpl');
?>

