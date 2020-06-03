<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Авторизация</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
<div class="form-wrap">
  <div class="container mt-4">
    <h1>Авторизация</h1>
   <link rel="stylesheet" href="css/style.css">
  </div>
<?php 
  if(isset($_Post[“submitButton”]))
  echo “Success!”;
?>
    <div class="container mt-4">
    <form action="check.php" method="post" > 
  
       <input type="text" class="form-control" name="username" id="username" placeholder="Введите Имя пользователя"><br>
       <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
    
<input type="submit" name="submitButton" value="SUBMIT">
 <br>
 <p>Нужен новый аккаунт? Тогда нажмите <a href="index.php">здесь</a>.</p>
  </form> 
    </div>
</div>
    </body>
</html>