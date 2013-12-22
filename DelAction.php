<?php
class DelAction implements iAction {
   public function render($idnews=int) {
      $smarty = new Smarty();
      include ("bd.php");
      $result = mysql_query ("DELETE FROM news WHERE id_news=$idnews");
      if ($result=='TRUE'){
      $template= 'delst.tpl';
      }
      else {
      $template= 'delb.tpl';
      }
      return $smarty->fetch($template);
   }
}
