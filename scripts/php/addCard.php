<?php
    session_start();

    $connect = new mysqli("localhost","root","","ProjectCollab");

    if($connect->connect_error){
        die("Соединение не установленно...");
    }

    $sql = sprintf("INSERT INTO `Projects`(`title`, `description`, `img`) VALUES ('%s', '%s', '%s')",
        $_POST['title'],
        $_POST['description'],
        $_POST['img']
    );

    if(!$connect->query($sql)){
        echo 'Ошибка добавления данных...';
    }
    else{
        header("Location: ../../pages/Main");
    }

    $connect->close();
?>