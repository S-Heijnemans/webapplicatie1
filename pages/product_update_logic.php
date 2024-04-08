<?php
    include 'conn.php';
    $data = [
        'naam' => $_POST['naam'],
        'prijs' => $_POST['prijs'],
        'id' => $_POST['id']
    ];
    $sql = "UPDATE producten SET naam=:naam, prijs=:prijs WHERE id=:id";
    $stmt= $connection->prepare($sql);
    $stmt->execute($data);

    header('Location: dashboard.php');
?>