<?php
if(isset($_POST['submit'])){
    $text = $_POST['your_text'];
    $wordCount = countWords($text);
    $charCount = mb_strlen($text, 'UTF-8');
    echo "Количество слов: $wordCount<br>";
    echo "Количество символов: $charCount";
}

function countWords($text) {
    $charlist = 'абвгдеёжзийклмнопрстуфхцчшщъыьэюяabcdefghijklmnopqrstuvwxyz';
    return str_word_count(mb_strtolower($text, 'UTF-8'), 0, $charlist);
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
<body>
<form method="post">
    <textarea name="your_text"></textarea><br>
    <input type="submit" name="submit" value="Count">
</form>
</body>
</html>
