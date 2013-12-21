<?php
class RegAction implements iAction {
   public function render() {
      $smarty = new Smarty();
      $template = 'reg.tpl'; 

      return $smarty->fetch($template);
   }
}
