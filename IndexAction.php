<?php
class IndexAction implements iAction {
   public function render() {
      $smarty = new Smarty();
      $template = 'main.tpl'; 

      return $smarty->fetch($template);
   }
}
