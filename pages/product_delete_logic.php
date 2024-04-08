<?php
session_start();
include 'conn.php';
 
$id = $_POST["id"];


$stmt = $connection->prepare("DELETE FROM producten WHERE id = :id");
$stmt->bindParam(":id", $id);
$stmt->execute();

header("Location: dashboard.php");
?>  