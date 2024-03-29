<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //  переменные с пустыми значениями по умолчанию
    $name = '';
    $age = 0;
    $salary = '';
    $yesno = '';

    // получаем данные из  пост
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : 0;
    $salary = isset($_POST['salary']) ? $_POST['salary'] : '';
    $yesno = isset($_POST['yesno']) ? $_POST['yesno'] : '';

    // хаваем данные в массив
    $infoData = [
        'name' => $name,
        'age' => $age,
        'salary' => $salary,
        'yesno' => $yesno
    ];

    // сохраняем данные в сессию
    $_SESSION['userData'] = $infoData;
}

// вывод данных из сессии если можно
if (isset($_SESSION['userData'])) {
    echo '<ul>';
    foreach ($_SESSION['userData'] as $key => $value) {
        echo "<li>$key: $value</li>";
    }
    echo '</ul>';
    echo '<br />';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<form method="post">
    <!-- поля формы  -->
    имя:
    <input type="text" name="name"><br>

    возраст:
    <input type="number" name="age"><br>

    сколько деняк:
    <input type="text" name="salary"><br>

    дада нетнет:
    <input type="text" name="yesno"><br>

    <!-- кнопка отправки формы -->
    <input type="submit" value="yippee!!!">
</form>
</body>
</html>
