<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['surname'])) {
        $_SESSION['surname'] = $_POST['surname'];
    }
    if (!empty($_POST['name'])) {
        $_SESSION['name'] = $_POST['name'];
    }
    if (!empty($_POST['age'])) {
        $_SESSION['age'] = $_POST['age'];
    }
}

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