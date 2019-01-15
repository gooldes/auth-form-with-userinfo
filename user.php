<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>Форма авторизации</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css"  />
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
  <?php include 'core/userinfo.php';?>

  <div class="container">
    <div class="row">
    <div class="col-sm-12 col-md-5 mx-auto center-block user-block">
      <h3>Информация о пользователе</h3>
      <table class="table">
        <tr>
        <td>Имя</td>
        <td><?php echo $user_info['firstname'] ?></td>
        </tr>
        <tr>
        <td>Фамилия</td>
        <td><?php echo $user_info['lastname'] ?></td>
        </tr>
        <tr>
        <td>E-mail</td>
        <td><?php echo $user_info['email'] ?></td>
        </tr>
        <tr>
        <td>Город</td>
        <td><?php echo $user_info['city'] ?></td>
        </tr>
        <tr>
        <td>Адресс</td>
        <td><?php echo $user_info['adress'] ?></td>
        </tr>
      </table>
      <form  action="core/logout.php" method="post">
        <button type="submit" name="button" class="btn btn-primary">Выйти</button>
      </form>
  </div>
  </div>

  </body>
</html>
