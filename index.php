<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="js/jquery-3.4.1.js" charset="utf-8"></script>
    <meta charset="utf-8">
    <title>Авторизация</title>
  </head>
  <body>
    <?php
    if ($_COOKIE['user'] == ''):
      ?>
    <div class="container">
    <form action="php/auth.php" method="post">
      <h1>Авторизация</h1>
        <div class="form-group">
          <label for="exampleInputEmail1">Логин</label>
          <input type="text" class="form-control" name="login" id="login" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Пароль</label>
          <input type="password" class="form-control" name="Pass" id="Pass">
          <small class="form-text text-muted"> <a href="registr.php">Ещё не зарегистрированы?</a></small>
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
  <?php else: ?>
    <div class="container">
    <p>Вы уже авторизованны. Чтобы выйти нажмите <a href="php/exit.php">сюда</a></p>
    <p>Логин учётной записи: <?=$_COOKIE['user']?></p>
    </div>
    </div>
    <?php endif; ?>
  </body>
</html>
