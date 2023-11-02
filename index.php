<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <link rel="stylesheet" href="assets/main.css">
</head>
<body>
    <!-- Форма авторизация -->
    <form action="vendor/signin.php" method="post" class="card">
        <h2 class="form-title">Вход</h2>
        <label for="">Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label for="">Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта?- <a href="/register.php">Зарегистрируйтесь</a>
        </p>
        <!-- Вывод сообщения -->
        <?php
           if($_SESSION['message']){
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
           }
            unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>