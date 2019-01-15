<?php
include 'config.php';
//Записываем основную информацию о пользователе используя двойное шифрование пароля
$password = md5(md5($_POST['password']));
$sql = "INSERT INTO user (login, password,hash) VALUES ('".$_POST['login']."' , '".$password."' , 0)";
if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
//Тут записываем дополнительные данные которые будут отображаться в карточке пользователя
$last_id = $db->insert_id;
$sql = "INSERT INTO user_info (firstname, lastname, city, email, adress, user_id)
VALUES ('".$_POST['firstname']."' , '".$_POST['lastname']."' , '".$_POST['city']."' , '".$_POST['email']."' ,'".$_POST['adress']."', '".$last_id."')";
if ($db->query($sql) === TRUE) {
     header("Location: ../index.php?success=true");
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

?>
