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

<?php  ?>
<div class="container">
  <div class="row">
      <div class="col-sm-12 col-md-4 mx-auto center-block register-block">
        <h3>Авторизация</h3>
        <form id="auth_form" action="core/register.php" method="post">
          <div class="form-group">
          <label for="login">Логин</label>
          <input type="text" class="form-control" name="login" required/> <br />
          <label for="password">Пароль</label>
          <input type="password" class="form-control" name="password" required/> <br />
          <label for="firstname">Имя</label>
          <input type="text" class="form-control" name="firstname" required/> <br />
          <label for="lastname">Фамилия</label>
          <input type="text" class="form-control" name="lastname" required/> <br />
          <label for="email">E-mail</label>
          <input type="email" class="form-control" name="email" required/> <br />
          <label for="city">Город</label>
          <input type="text" class="form-control" name="city" required/> <br />
          <label for="adress">Адресс</label>
          <input type="text" class="form-control" name="adress" required /> <br />
          </div>
          <span id="error"></span>
          <button type="submit" name="button"  class="btn btn-primary">Зарегистрироваться</button>
          <a href="index.php" class="btn btn-danger">Отмена</a>
        </form>
      </div>
    </div>
  </div>
    </div>
  <script>

    /*
    Функция валидации полей удаляет последний введеный
    символ если он не соответствует белому списку
    */

    $('input').on('input keyup', function(e) {

      if($(this).attr('name') == "login"){
        var str = $(this).val();
      if (/[^a-zA-Z0-9]/.test(str)){
        //str = str.slice(0, -1);
        str = str.replace(/[^a-zA-Z0-9]/g, '')
           $(this).val(str);
           alert("Используйте только латинские буквы и цифры");
        }
      }else{
        if($(this).attr('name') != "password"){
          var str = $(this).val();
          if (/[^a-zA-Z0-9-а-яА-Я\s@]/.test(str)){
            str = str.replace(/[^a-zA-Z0-9-а-яА-Я\s@]/g, '')
               $(this).val(str);
               alert("Не используйте спецсимволы");
            }
        }
      }

    });
  </script>
  </body>
</html>
