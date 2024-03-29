<?php

function redirectToHome(): void
{
    header('Location: index.php');

    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    redirectToHome();
}

$category = $_POST['category'];
$title = $_POST['title'];
$email = $_POST['email'];
$desc = $_POST['description'];

$filePath = "cats/{$category}/{$title}.txt";

if (false === file_put_contents($filePath, "$email\n$desc")) {
    throw new Exception('Something went wrong.');
}
redirectToHome();