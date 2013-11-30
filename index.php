<?php
//подключение к БД
include('bd.php');
include_once("iAction.php");
//подключение Смарти
define('SMARTY_DIR', str_replace("\\", "/", getcwd()).'/smarty/libs/');

require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();

//открытие сессий
session_start();
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

/*switch ($_GET['action']) {
  case 2:
    $temp=2;
    break;
case 3://авторизация
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
    if (isset($_POST['password'])) { $password=md5($_POST['password']); if ($password =='') { unset($password);} }
    if (empty($login) or empty($password))
    {
       exit ("Вы ввели не всю информацию!");
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password); 
    $login = trim($login);
    $password = trim($password);
    $result = mysql_query("SELECT * FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {
       exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {
       if ($myrow['password'] ==$password) {
          $_SESSION['login']=$myrow['login']; 
          $_SESSION['id']=$myrow['id'];
          echo "Вы успешно вошли на сайт!";
          header('Location: /index.php');
       }
       else {
          exit ("Извините, введённый вами login или пароль неверный.");
       }
    }    
    $temp=3;
    break;
case 4:

    $temp=4;
    break;
case 5:
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=md5($_POST['password']); if ($password =='') { unset($password);} }
    if (empty($login) or empty($password)) 
    {
       exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);
    $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
       exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
    $result2 = mysql_query ("INSERT INTO users (login,password) VALUES('$login','$password')");
 
    if ($result2=='TRUE')
    {
       echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт.";
    }
    else {
       echo "Ошибка! Вы не зарегистрированы.";
    }
    break;
}
*/
define('LOGIN_ACTION', 2);

switch ($_GET['action']) {
  case LOGIN_ACTION:
    break;
  default:
    $actionClass = 'LoginAction';
    break;
}

include_once "$actionClass.php";

$action = new $actionClass();
$content = $action->render();

//проверка сессий
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
        $avtorizac=0;
    }
    else
    {
        $avtorizac=1;
    }
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

