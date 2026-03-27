<?php
    session_start();

    $connect = new mysqli("localhost","root","","ProjectCollab");

    if($connect->connect_error){
        die("Соединение не установленно...");
    }

    $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = sprintf("INSERT INTO `Users`(`login`, `password`, `email`) VALUES ('%s', '%s', '%s')",
        $_POST['login'],
        $hash,
        $_POST['email']
    );

    if(!$connect->query($sql)){
        echo 'Ошибка добавления данных...';
    }
    else{
        header("Location: ../../pages/guest");
    }

    $connect->close();
?>