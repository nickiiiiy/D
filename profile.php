<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: /');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <link rel="stylesheet" href="assets/main.css">
</head>
<body>
    <!-- Профиль-->
    <form class="card-pr">
        <img class="profile" src="<?=$_SESSION['user']['avatar'] ?>"  alt="">
        <h2 class="name-pr">Здравствуйте, <?=$_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?=$_SESSION['user']['email'] ?></a>
        <a href="admin.php" class="insert">Пройти тестирование</a>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>
</body>
</html>