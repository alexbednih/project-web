<?php
class AboutAction implements iAction {
   public function render() {
      $smarty = new Smarty();
      $template = 'about.tpl'; 

      return $smarty->fetch($template);
   }
}
