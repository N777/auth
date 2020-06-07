<?php
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['Pass']),FILTER_SANITIZE_STRING);

$mysql = new mysqli('auth','root','','test');
if ($mysqli->connect_errno) {
          printf("Не удалось подключиться к базе: %s\n", $mysqli->connect_error);
                exit();
            }
$result = $mysql -> query("SELECT * FROM `auth` WHERE `login` = '$login' AND `pass` = '$pass'");
$user=$result->fetch_assoc();
if (count ($user)==0) {
  echo "<p>Такой пользователь не найден<p> <a href='../index.php'>Назад</a>";
  exit;
}
setcookie("user", $user['login'], time()+3600,"/");
header('location: /' );
?>
