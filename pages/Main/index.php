<?
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <title>Главная</title>
    <meta name="description" content="ProjectCollab - это не просто инструмент для создания доски задач, это проект объединяющий людей с общими целями чтобы творить будущее...">
</head>
<body>
    <header>
        <p>ProjectCollab</p>
        <div class="menu">
            <div class="auth_menu">
                <?
                    if ($_SESSION["login"]){
                        echo '<p onclick="show()">добавление проекта</p>';
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
    <form action="../../scripts/php/addCard.php" method="POST" class="modal_add" id="modal">
        <p class="x" onclick="hide()">x</p>
        <p>Добавление проекта</p>
        <input type="text" name="title" placeholder="Заголовок...">
        <input type="text" name="description" placeholder="Описание...">
        <input type="text" name="img" placeholder="url on img...">
        <button type="submit">создать</button>
    </form>
    <div class="container">
        <div class="left_imgBG">
            <div>
                <img src="../../assets/img/c-.png" alt="bg_img1.png">
                <img src="../../assets/img/c-sharp.png" alt="bg_img2.png">
                <img src="../../assets/img/python.png" alt="bg_img3.png">
            </div>
        </div>
        <div class="content">
            <div class="projects">
                <div class="row1">

                    <div class="filters_status">
                        <button data-status="all">все</button>
                        <button data-status="в процессе">в процессе</button>
                        <button data-status="внедрен">внедрен</button>
                        <button data-status="заброшен">заброшен</button>
                    </div>

                    <div class="filters_type">
                        <button data-type="all">Все</button>
                        <button data-type="online">online</button>
                        <button data-type="offline">offline</button>
                        <button data-type="drafts">drafts</button>
                    </div>

                    <div class="search">
                        <input type="text" id="searchInput" placeholder="Напишите название...">
                    </div>

                </div>
                <div class="row2">
                    <div class="col">
                        <p class="title">Проекты: </p>
                        <div class="cards" id="cards">
                            <?php
                                $connect = new mysqli("localhost","root","","ProjectCollab");

                                $sql = sprintf("SELECT * FROM `projects`");
                                $result = $connect->query($sql);

                                while($row = $result->fetch_assoc()){
                                    echo 
                                    '<div class="card" 
                                    data-status="' . $row['status'] . '" data-type="' . $row['type'] . '">
                                        <h1>'. $row["title"] .'</h1>
                                        <div class="desc">
                                            <img src="'. $row["img"] .'" alt="card.png">
                                            <div class="description">
                                                '. $row["description"] .'
                                            </div>
                                        </div>
                                        <p>статус</p>
                                        <button>редактировать</button>
                                    </div>';
                                }
                            ?>
                        </div>
                        <div class="pagination" id="pagination"></div>
                    </div>

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
    <script src="../../scripts/js/main.js"></script>
</body>
</html>