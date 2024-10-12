<?php
// Обробка відправлених коментарів
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    $file = '../txt/comments.txt';
    $currentContent = file_get_contents($file);
    $newContent = $currentContent . "\n$name: $comment\n";

    file_put_contents($file, $newContent);
    header('Location: ../script_html/home.php');
    exit();
}
?>