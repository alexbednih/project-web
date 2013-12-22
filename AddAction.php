<?php
class AddAction implements iAction {
   public function render($loginn='') {
      $smarty = new Smarty();
      $template = 'addstat.tpl'; 
      $smarty->assign('loginn',$loginn);
      return $smarty->fetch($template);
   }
}
