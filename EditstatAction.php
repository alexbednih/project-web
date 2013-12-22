<?php
class EditstatAction implements iAction {
   public function render($id_news=int) {
      $smarty = new Smarty();
      include 'bd.php';
      $result = mysql_query("SELECT * FROM news WHERE id_news=$id_news");
      if (!$result){
      exit("<p>В базе не обнаружено таблицы проверьте настройки</p>");
      }

      if (mysql_num_rows($result) == 0){
        exit("Записей нет");
      }

      $row[]=mysql_fetch_array($result,MYSQL_ASSOC);
      $template = 'editst.tpl'; 
      $smarty->assign('name',$row[0]['name']);
      $smarty->assign('body',$row[0]['body']);
      $smarty->assign('idnews',$id_news);
      return $smarty->fetch($template);
   }
}
