<?php
session_start();
include 'conn.php';

$id = $_POST["user_id"];


$stmt = $connection->prepare("DELETE FROM user WHERE id = :id");
$stmt->bindParam(":id", $id);
$stmt->execute();

header("Location: dashboard.php");
?>     