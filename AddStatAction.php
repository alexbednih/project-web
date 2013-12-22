<?php
class AddstatAction implements iAction {
    public function render() {
    $smarty = new Smarty();
    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} }  
    if (isset($_POST['body'])) { $body=$_POST['body']; if ($body =='') { unset($body);} }
    if (empty($name) or empty($body)){
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $body = stripslashes($body);
    $body = htmlspecialchars($body);
    include ("bd.php");
    $result = mysql_query ("INSERT INTO news (name,body) VALUES('$name','$body')");
    if ($result=='TRUE'){
    $template= 'asa.tpl';
    }
    else {
    $template= 'asb.tpl';
    }
    return $smarty->fetch($template);
}
}    

