<?php
session_start();

// Обработка POST-запроса
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Проверяем и сохраняем фамилию, если она была отправлена
    if (!empty($_POST['surname'])) {
        $_SESSION['surname'] = $_POST['surname'];
    }

    // Проверяем и сохраняем имя, если оно было отправлено
    if (!empty($_POST['name'])) {
        $_SESSION['name'] = $_POST['name'];
    }

    // Проверяем и сохраняем возраст, если он был отправлен
    if (!empty($_POST['age'])) {
        $_SESSION['age'] = $_POST['age'];
    }
}

// Выводим данные, если они есть в сессии
if (isset($_SESSION['surname'], $_SESSION['name'], $_SESSION['age'])) {
    echo 'Surname: ' . $_SESSION['surname'] . '<br>';
    echo 'Name: ' . $_SESSION['name'] . '<br>';
    echo 'Age: ' . $_SESSION['age'] . '<br>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session Form</title>
</head>
<body>
<form method="post">
    Фамилия: <input type="text" name="surname"><br>
    Имя: <input type="text" name="name"><br>
    Возраст: <input type="number" name="age"><br>
    <input type="submit" value="yippee!">
</form>
</body>
</html>