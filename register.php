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
    <title>Регистрация пользователя</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/main.css">
</head>
<body>
    <!-- Форма авторизация -->
    <form class="card" action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label for="">ФИО</label>
        <input type="text" name="full_name" placeholder="Введите своё полное имя">
        <label for="">Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label for="">Почта</label>
        <input type="email" name="email" placeholder="Введите свою почту">
        <label>Изображение профиля</label>
        <input type="File" name="avatar"> 
        <label for="">Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label for="">Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">

        <fieldset>
        <label for="terms">
            <input
                type="checkbox"
                id="terms"
                name="terms"
            >
            Я принимаю все условия пользования
        </label>
        </fieldset>

        <button type="submit">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт?- <a href="/index.php">Авторизируйтесь</a>!
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