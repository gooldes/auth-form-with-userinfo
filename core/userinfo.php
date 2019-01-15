<?php
include 'config.php';

session_start();
$user_info = array();

/*
Выводим основную информацию о пользователе
Сверяем логин и хэш записаный в сессию, хеш создается при каждой новой авторизации
*/
  if(isset($_SESSION['login'])){
    $sql = "SELECT hash FROM user where login = '".$_SESSION['login']."'";
    $result = $db->query($sql);
    $keyterm = current(mysqli_fetch_array($result));
    if($keyterm == $_SESSION['hash']){

        $sql = "SELECT * FROM user_info where user_id = '".$_SESSION['id']."'";
        $result = $db->query($sql);
        $user_info = mysqli_fetch_array($result);
    }

  }else{
     header("Location: index.php");
  }


?>
