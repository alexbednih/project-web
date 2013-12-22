<?php
class EditstAction implements iAction {
   public function render($idnews=int) {
      $smarty = new Smarty();
      if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} }  
      if (isset($_POST['body'])) { $body=$_POST['body']; if ($body =='') { unset($body);} }
      if (empty($name) or empty($body)){
      exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
      }
      $name = stripslashes($name);
      $name = htmlspecialchars($name);
      $body = stripslashes($body);
      $body = htmlspecialchars($body);
      include ("bd.php");
      $result = mysql_query ("UPDATE news SET name='$name',body='$body' WHERE id_news=$idnews");
      if ($result=='TRUE'){
      $template= 'edita.tpl';
      }
      else {
      $template= 'editb.tpl';
      }
      return $smarty->fetch($template);
   }
}
