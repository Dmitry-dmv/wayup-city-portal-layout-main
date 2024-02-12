<?php
global $db;
session_start();

require_once __DIR__ . '/../../app/requires.php';

$email=$_POST['email'];
$password=$_POST['password'];




$query=$db->prepare("SELECT* FROM `users` WHERE `email`= :email");
$query->execute(['email'=>$email]);
$user=$query->fetch(PDO::FETCH_ASSOC);

if (!$user){
    $_SESSION['auth error']=true;
    header('Location: /login.php');

}

if (password_verify($password,$user['password'])){
    $_SESSION['auth error']=true;
    header('Location: /login.php');

}

$_SESSION['user']=$user['id'];

header('Location: /');