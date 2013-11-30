<?php
class LoginAction implements iAction {
   public function render() {
      $smarty = new Smarty();
      $template = isset($_SESSION['login']) ? 'logina.tpl' : 'loginb.tpl'; 
      return $smarty->fetch($template);
   }
}
