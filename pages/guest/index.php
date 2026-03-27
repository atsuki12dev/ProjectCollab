<?
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <title>Приветствуем</title>
    <meta name="description" content="ProjectCollab - это не просто инструмент для создания доски задач, это проект объединяющий людей с общими целями чтобы творить будущее...">
</head>
<body>
    <header>
        <p>ProjectCollab</p>
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
                echo '<a href="../profile"><p>'. $_SESSION["login"] .'</p></a>';
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
            <div class="guest">
                <p>Приветствуем вас на нашем <br> KanBan ProjectCollab для разработчиков... <br> Для начала работы войдите в аккаунт</p>
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