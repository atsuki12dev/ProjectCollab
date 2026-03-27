<?php
    session_start();

    $connect = new mysqli("localhost","root","","ProjectCollab");

    if($connect->connect_error){
        die("Соединение не установленно...");
    }

    $login = $_POST['login'];
    $password = $_POST['password'];
    $_SESSION['login'] = $login;

    $sql = sprintf("SELECT * FROM `Users`");

    $result = $connect->query($sql);

    while($row = $result->fetch_assoc()){
        if($login == $row['login']){
            $hash = $row['password'];
        }
    }

    $verify = password_verify($password, $hash);

    if($verify){
        header("Location: ../../pages/Main");
    }
    else{
        echo 'Неверный пароль...';
    }
?>