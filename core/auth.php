<?php
include 'config.php';
session_start();
/*
Проверка на авторизированого пользователя
Если пользователь ранее авторизирован, то сразу попадет на страницу user.php
*/
if(isset($_SESSION['login'])){
  $sql = "SELECT hash FROM user where login = '".$_SESSION['login']."'";
  $result = $db->query($sql);
  $keyterm = current(mysqli_fetch_array($result));
  if($keyterm == $_SESSION['hash']){
  header("Location: user.php");
  }

}
?>
