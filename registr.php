<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="js/jquery-3.4.1.js" charset="utf-8"></script>
    <meta charset="utf-8">
    <title>Регистрация</title>
  </head>
  <body>
    <div class="container">
      <h1>Регистрация</h1>
    <form action="php/reg.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Логин</label>
          <input type="text" class="form-control" name="login" id="login" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Пароль</label>
          <input type="password" class="form-control" name="Pass" id="Pass">
          <small class="form-text text-muted"> <a href="index.php">Назад к авторизации</a></small>
        </div>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
    </div>
  </body>
</html>
