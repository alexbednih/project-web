<?php
class DelAction implements iAction {
   public function render($idnews=int,$loginn='') {
      $smarty = new Smarty();
      if (is_null($loginn)){
         $template='err.tpl';
      }
         else{
         include ("bd.php");
         $result = mysql_query ("DELETE FROM news WHERE id_news=$idnews");
         if ($result=='TRUE'){
            $template= 'delst.tpl';
            }
            else {
            $template= 'delb.tpl';
            }
         }
      return $smarty->fetch($template);
   }
}
