<?
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <title>Профиль</title>
    <meta name="description" content="ProjectCollab - это не просто инструмент для создания доски задач, это проект объединяющий людей с общими целями чтобы творить будущее...">
</head>
<body>
    <header>
        <a href="../Main/"><p>ProjectCollab</p></a>
        <div class="menu">
            <div class="auth_menu">
                <?
                    if ($_SESSION["login"]){
                        echo '<a href="../../scripts/php/reset.php"><p>выйти</p></a>';
                    }
                    else{
                        echo '<a href="../auth"><p>войти</p></a>';
                        echo '<a href="../reg"><p>регистрация</p></a>';
                    }   
                ?>
            </div>
            <?
                echo '<p>'. $_SESSION["login"] .'</p>';
            ?>
        </div>
    </header>
    <div class="container">
        <div class="left_imgBG">
            <div>
                <img src="../../assets/img/c-.png" alt="bg_img1.png">
                <img src="../../assets/img/c-sharp.png" alt="bg_img2.png">
                <img src="../../assets/img/python.png" alt="bg_img3.png">
            </div>
        </div>
        <div class="content">
            <div class="row3">
                <div class="profile">
                    <?php
                        session_start();

                        $connect = new mysqli("localhost","root","","ProjectCollab");

                        $sql = sprintf("SELECT * FROM `users`");
                        $result = $connect->query($sql);

                        while($row = $result->fetch_assoc()){
                            if($_SESSION['login'] == $row['login']){
                                echo 
                                '<img src="'.$row['ava'].'" alt="ava.png">
                                <h1>'.$row['login'].'</h1>
                                <p>'.$row['email'].'</p>';
                            }
                        }
                    ?>
                </div>
                <div class="my">
                    <p>Мои проекты: </p>
                    <h1>Test1</h1>
                    <h1>Test2</h1>
                    <h1>Test3</h1>
                    <h1>Test4</h1>
                    <h1>Test5</h1>
                    <h1>Test6</h1>
                </div>
            </div>
        </div>
        <div class="right_imgBG">
            <div>
                <img src="../../assets/img/java.png" alt="bg_img4.png">
                <img src="../../assets/img/java-script.png" alt="bg_img5.png">
                <img src="../../assets/img/react.png" alt="bg_img6.png">
            </div>
        </div>
    </div>
    <footer>
        <p>@copyright Fantazm 2025.</p>
    </footer>
</body>
</html>