<?php
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
          header('Location: /project_web/index.php');
       }
       else {
          exit ("Извините, введённый вами login или пароль неверный.");
       }
    }

class AvtAction implements iAction {
   public function render() {
      $smarty = new Smarty();

      $template = 'avtoriz.tpl'; 

      return $smarty->fetch($template);
   }
}
