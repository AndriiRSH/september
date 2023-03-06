<?php
require('path.php');
include ("app/database/db.php");

$errMsg = '';

//function userAuth($user){
//    $_SESSION['id'] = $user['id'];
//    $_SESSION['login'] = $user['username'];
//    $_SESSION['admin'] = $user['admin'];
//    header('Location: https://www.php.net/manual/ru/function.header.php');
//
//
//}

$users = selectAll('users');

//if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
//    $admin = 0;
//    $login = trim($_POST['login']);
//    $email = trim($_POST['email']);
//    $passF = trim($_POST['pass-first']);
//    $passS = trim($_POST['pass-second']);
//
//
//
//    if ($login === '' || $email === '' || $passF === ''){
//        $errMsg = 'Не всі поля заповнені';
//    }elseif (mb_strlen($login, 'UTF-8') < 2){
//        $errMsg = "Логін має бути більше 2 символів";
//    }elseif ($passF !== $passS){
//        $errMsg = "Паролі не співпадають";
//    }
//    else{
//        $existence = selectOne('users', ['email' => $email]);
//        if ($existence['email'] === $email){
//            $errMsg = "Користувач з такою поштою вже існує";
//        }else{
//            $pass = password_hash($passF, PASSWORD_DEFAULT);
//            $post = [
//                'admin' => $admin,
//                'username' => $login,
//                'email' => $email,
//                'password' => $pass
//            ];
//            $id = insert('users', $post);
//            $user = selectOne('users', ['id' => $id]);
//tt($user);
//            $_SESSION['id'] = $user['id'];
//            $_SESSION['login'] = $user['username'];
//            $_SESSION['admin'] = $user['admin'];
//
//            if ($_SESSION['admin']){
//                header('location: ' . BASE_URL . "admin/admin.php");
//            }else{
//                header('location: ' . BASE_URL);
//            }
//        }
//
//    }
//}else{
//    $login = "";
//    $email = "";
//}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){

    $email = trim($_POST['mail']);
    $pass = trim($_POST['password']);

    if($email === '' || $pass === '') {
        $errMsg = "Не все поля заполнены!";
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence && password_verify($pass, $existence['password'])){
            header('location: ' . BASE_URL . 'admin/admin.php');
        }else{
            $errMsg = "Почта либо пароль введены неверно!";
        }
    }
}else {
    $email = '';
}


