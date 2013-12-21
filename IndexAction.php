<?php

class IndexAction implements iAction {
   public function render($row = array(),$loginn = '') {
      $smarty = new Smarty();
      $smarty->assign('row',$row);
      $smarty->assign('loginn',$loginn);
      $template = 'main.tpl'; 

      return $smarty->fetch($template);
   }
}
