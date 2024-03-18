<?php
    include "conn.php";
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
<?php
    include "header.php";
    include "nav.php";
    echo "<br>";
?>
    <div class='opmaakblok-main-page'></div>
<div class='container-menu-main'>
<?php
$stmt = $connection->query("SELECT * FROM producten");

while ($row = $stmt->fetch()) 
{
    echo "<div class='item-menu-main-box'>";
        echo "<H1>";
        echo $row['naam']."<br />\n";
        echo "</H1>";

        echo "<div class='menu-item-opmaak'>";
        echo "</div>";
        echo "<br>";
 
        echo "<div class='opmaak-text-item-menu'>";
        echo $row['omschrijving']."<br />\n";
        echo "</div>";

        echo "<br>";
        echo "<div class='box-prijs-menu'>";
        echo "<H3>";
        echo $row['prijs']."<br />\n";
        echo "</H3>";
        echo "</div>";

    echo "</div>";
   


// echo $row['omschrijving']."<br />\n";
// echo $row['prijs']."<br />\n";
}
?> 
</div>
    <div class='opmaakblok-main-page-2'></div>

<?php
    include "footer.php";
?>
</body>
</html>