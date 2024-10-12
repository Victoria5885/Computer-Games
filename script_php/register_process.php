<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Зберегти повідомлення про успішну реєстрацію у сеансі
    $_SESSION['registration_success'] = true;

    // Перенаправити користувача на головну сторінку після реєстрації
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	exit;
}
?>