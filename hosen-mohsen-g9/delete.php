<?php

$pdo = new PDO('mysql:host=localhost;dbname=esport-blog', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
if (session_status() === PHP_SESSION_NONE){
  session_start();
};


if (isset($_GET['delete'])){
    $delete = $_GET['delete'];
    $pdo->exec("DELETE FROM tweet WHERE id_tweet= $delete");
    header('Location: index.php');
    }


?>
