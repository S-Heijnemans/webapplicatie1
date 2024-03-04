<?php

    if($_POST['leeftijd'] <18 ){
        header("Location: ../index.php");
    }
    else{
        echo'legal';
    }

?>