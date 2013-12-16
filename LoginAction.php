<?php
class LoginAction implements iAction {
   public function render() {
      $smarty = new Smarty();
      $template = is_null($_SESSION['login']) ? 'logina.tpl' : 'loginb.tpl'; 

      return $smarty->fetch($template);
   }
}
