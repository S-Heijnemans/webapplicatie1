<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
if ($_SESSION["id"] < 2) {
 echo"fgnbrfed"; 
}
?>

<form action="user_delete_logic.php" name='user_delete_logic.php' method="POST">
                    <label>delete is:</label>
                    <input type="text" name='user_id' placeholder="id" required>
                    <input type="submit" value="register">
                </form>