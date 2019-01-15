<?php
include 'config.php';
session_start();

  $sql = "SELECT password FROM user where login = '".$_POST["login"]."'";
  $result = $db->query($sql);
  //Проверяем есть ли такой пользователь по логину
  if (mysqli_num_rows($result)==0) {
    echo "false";
  }else{
    //Сверяем пароль в случае успеха
    $keyterm = current(mysqli_fetch_array($result));
    if($keyterm == md5(md5($_POST['password']))){
      //Записываем данные в сесии
      $_SESSION['login']  = $_POST["login"];

      $sql = "SELECT id FROM user where login = '".$_POST["login"]."'";
      $result = $db->query($sql);
      $keyterm = current(mysqli_fetch_array($result));
      $_SESSION['id'] = $keyterm;
      $hash = random_str();
      $sql = "UPDATE  user set hash = '".$hash."' WHERE login = '".$_POST["login"]."'";
      $result = $db->query($sql);
      //Хэш записывается для того чтобы нельзя было подменить логин в сесии и служит дополнительной защитой
      $_SESSION['hash'] = $hash;
       echo "true";
    }else{
      echo "false";
    }
  }

  //Функция создает случайную строку для записи в хеш
  function random_str()
  {
    return substr(sha1(rand()), 0, 10);
  }
?>
