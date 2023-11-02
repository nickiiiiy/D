<?php
// Устанавливаю соединение с бд
$connect = mysqli_connect('localhost', 'root', '','diplom');
if(!$connect){
    die('ошибка подключения бд');
}