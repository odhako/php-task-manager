<?php
include 'base.php';

$link = database_connection();
mysqli_query($link, "SET NAMES 'utf8'");

function get_all_users($link) {
    $query = 'SELECT * FROM users';
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

    <title>Пользователи - Менеджер задач</title>
</head>

<body>
    <header>
        <h1>Пользователи</h1>
    </header>

<?php include 'nav.php'; ?>

<main>
    <h1>Пользователи</h1>
    <table>
        <tr>
            <th>id</th>
            <th>Никнейм</th>
            <th>Полное имя</th>
            <th>Зарегистрирован</th>
        </tr>
        <?php foreach (get_all_users($link) as $row): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nickname'] ?></td>
                <td><?= $row['name'] . ' ' . $row['lastname'] ?></td>
                <td><?= $row['created'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>

<?php
include 'bottom.php';
