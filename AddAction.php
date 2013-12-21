<?php
class AddAction implements iAction {
   public function render() {
      $smarty = new Smarty();
      $template = 'addstat.tpl'; 

      return $smarty->fetch($template);
   }
}
