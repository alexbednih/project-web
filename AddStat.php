<?
    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['body'])) { $body=$_POST['body']; if ($body =='') { unset($body);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
 if (empty($name) or empty($body)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $body = stripslashes($body);
    $body = htmlspecialchars($body);
 // подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
    $result = mysql_query ("INSERT INTO news (name,body) VALUES('$name','$body')");
    // Проверяем, есть ли ошибки
    if ($result=='TRUE')
    {
    echo "Вы успешно добавили запись!  <br><a href='index.php'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Вы не добавили запись.";
    }
?>
