<?php
session_start();
include 'conn.php';

if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
    header("Location: register.php");
    exit();
}

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$stmt = $connection->prepare("INSERT INTO user (username, password, email) VALUES (:username, :password, :email)");
$stmt->bindParam(":username", $username);
$stmt->bindParam(":password", $password);
$stmt->bindParam(":email", $email);
$stmt->execute();

header("Location: login.php");
?>