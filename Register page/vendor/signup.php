<?php
session_start();

require_once 'connect.php';


$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if (empty($full_name) || empty($login) || empty($email) || empty($password) || empty($password_confirm)) {
    $_SESSION['message'] = 'Please fill in all fields';
    header('Location: ../register.php');
    exit(); // Зупинка виконання скрипта, оскільки дані не були введені
}
if ($password === $password_confirm ) {
    //$_FILES['avatar']['name']
    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
        $_SESSION['message'] = 'Problem with upload image';
        header('Location: ../register.php');
    }
    $password = md5($password);
    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");
    $_SESSION['message'] = 'Register was succesfull';
    header('Location: ../index.php');

} 
else 
{
    $_SESSION['message'] = 'Passwords  not same';
    header('Location: ../register.php');
}

?>