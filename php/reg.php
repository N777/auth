<?php
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['Pass']),FILTER_SANITIZE_STRING);

if (mb_strlen($login)<2 || mb_strlen($login)>30)
  {
  echo "<p>Недопустимая длина логина</p> <a href='../registr.php'>Назад</a>";
  exit;
  }

  else if (mb_strlen($pass)<2 || mb_strlen($pass)>15)
    {
    echo "<p>Недопустимая длина пароля(от 2 до 15 символов)</p> <a href='../registr.php'>Назад</a>";
    exit;
    }
$mysql = new mysqli('auth','root','','test');
$mysql->query("INSERT INTO `auth` ( `login`, `pass`) VALUES ('$login', '$pass')") ;
echo($mysqli->errno);
header('location: /' );

 ?>
