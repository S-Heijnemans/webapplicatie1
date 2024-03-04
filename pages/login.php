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
    <div class='block-login'>
        <form class='login_form' name="logine" method="POST" action="../index.php">
            <h3>Login</h3>
                 <div class='row'>
                 <p>Naam: </p>  
                 <input type="text" name="naam"/>          
            </div>
         <div class='row'>
                 <p>e-mail: </p>  
                 <input type="email" name="email"/>          
         </div>
         <div class='row'>
                 <p>wachtwoord: </p>  
                 <input type="password" name="wachtwoord"/>          
        </div>
        <div class='row'>
            <input type="submit" name="submit" value='send'/>          
        </div>  
    </div>

</div>
</body>
</html>
