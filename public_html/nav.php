<?php
$uri = $_SERVER['REQUEST_URI'];

function if_current_page($uri, $link) {
    if (strpos($uri, $link)) {
        return 'aria-current="page"';
    } else {
        return null;
    }
}
?>
<nav>
    <ul>
        <li><a href="index.php" <?= if_current_page($uri, 'index.php') ?> >Главная</a></li>
        <li><a href="users.php" <?= if_current_page($uri, 'users.php') ?> >Пользователи</a></li>
        <li><a href="#">Статусы</a></li>
        <li><a href="#">Метки</a></li>
        <li><a href="#">Задачи</a></li>
        <li><?= $uri ?></li>
    </ul>
</nav>
