<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>Форма авторизации</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css"  />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

<?php include 'core/auth.php' ?>
<div class="container-fluid">

  <div class="row">
    <div class="col-sm-12 col-md-4 mx-auto center-block form-block">
      <h3>Авторизация</h3>
      <?php
      if(isset($_GET['success'])){
        echo "<div class='alert alert-success' role='alert'>Вы успешно зарегистрировались!</div>";
      }
      ?>
      <form id="auth_form" class="" action="" method="post">
        <div class="form-group">
        <label for="login">Логин</label>
        <input type="text" class="form-control" name="login" /> <br />
        <label for="password">Пароль</label>
        <input type="text" class="form-control" name="password" /> <br />
        </div>
        Еще не зарегистрированы? <a href="register.php">Регистрация</a>
        <span id="error"></span>
        <button type="button" name="button" onclick="submitForm();" class="btn btn-primary">Войти</button>
      </form>
    </div>
  </div>
</div>
  <script>
  //Скрипт отправки формы через Ajax
  function submitForm(){
        $.ajax({
            url:     'core/login.php',
            type:     "POST",
            dataType: "html",
            data: $("#auth_form").serialize(),  // Сеарилизуем объект
            success: function(data) { //Данные отправлены успешно
              if(data == "true"){
                 window.location = "user.php";
              }else{
                  $("#error").html("<div class='alert alert-warning' role='alert'>Неверный логин или пароль </div>");
              }
          },
      });
    }
  </script>
  </body>
</html>
