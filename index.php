<?php

require_once 'pr.php';
require_once 'functions.php';
require_once "View.php";
require_once "View.php";

// error_reporting(-1);

$limit = 5;

$showRows = new View;
$arPosts = $showRows->ShowRows();
$pages = $showRows->numberPages($limit);

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?_v=20220701073021">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <title>Гостевая книга</title>
</head>

<body>
    <div class="wrapper">
<header class="header">
    
</header>
    
    <main class="main">
        <div class="container">
            <div class="content">
                <h2>Гостевая книга</h2>
                <hr>
                <form action="functions.php" method="post" id="basic-form">
                    <div class="name input">
                        <label for="name">Имя:</label>
                        <input type="text" id="name" name="name" required maxlength="30"title="Пожалуйста, введите Ваше имя пользователя.">
                    </div>
                    <div class="email input">
                        <label for="email">E-Mail:</label>
                        <input type="email" id="email" name="email" required maxlength="30"title="Пожалуйста, введите Ваш E-mail.">
                    </div>
                    <div class="msd">
                        <textarea name="msd" id="message" required pattern=""title="Пожалуйста, введите Ваше Сообщение."></textarea>
                    </div>
                    <input type="hidden" name="send">
                    <div class="send">
                        <input type="submit" name="submit" value="Отправить">
                    </div>
                </form>
                <hr class="line__table">
                <table class="table_sort">
                    <thead>
                        <tr>
                            <th class="col_1">Имя</th>
                            <th class="col_2">E-mail</th>
                            <th class="col_3">Сообщение</th>
                            <th class="col_4">Дата сообщения</th>
                        </tr>
                    </thead>
                    <tbody>
                        <? foreach ($arPosts as $arItem) : ?>
                            <tr>
                            <td class="col_1"><?= $arItem['name'] ?></td>
                            <td class="col_2"><?= $arItem['email'] ?></td>
                            <td class="col_3"><?= $arItem['post'] ?></td>
                            <td class="col_4"><?= $arItem['date'] ?></td>
                            </tr>
                        <? endforeach; ?>
                    </tbody>
                </table>
                <div class="buttom__block">
                    <a data-page="1" data-max="<?php echo $page; ?>" id="showmore-button" href="#"><div class="buttom__item showmore-bottom">Ещё...</div></a>
                    <div class="buttom__item"><buttom id="delite">Сбросить</buttom></div>
                </div>
            </div>
            <div class="technologe"></div>
        </div>
    </main>
    <footer class="footer">

</footer>
</div>
    <script src="/js/table_script.js?_v=20220701073021"></script>
    <script src="/js/add_table.js"></script>
    <script src="/js/validate.js"></script>
</body>

</html>

