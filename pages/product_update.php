<?php
    include "conn.php";

    $stmt = $connection->prepare("SELECT * FROM producten WHERE id=:id");
    $stmt->execute(['id' => $_GET['id']]);
    $product = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>

<div class='container-login-page'>
    <form class='form-login-tabel' action="product_update_logic.php" name='product_update_logic' method="POST">
     <label>Id:</label>
     <input type="text" name='id' value="<?php echo $product['id'];?>" required>
     <label>Naam:</label>
     <input type="text" name='naam' value="<?php echo $product['naam'];?>" required>
     <label>Prijs:</label>
     <input type="text" name='prijs' value="<?php echo $product['prijs'];?>" required>
     <input type="submit" value="update product">
     </form>

     <form action="product_delete_logic.php" name='product_delete_logic' method="POST">
                    <label>delete is:</label>
                    <input type="text" name='id' value="<?php echo $product['id'];?>"  required>
            <input type="submit" value="delete product">
    </form>

</div>
</body>
</html>