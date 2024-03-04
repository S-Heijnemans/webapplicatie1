<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <div class='opmaakblok-header-index'></div>
        <div class='logo-header'>
            <a class='logo'>IJsPaleis</a>
        </div>
        <div class='opmaakblok-header-index-2'></div>
    </header>
    <nav>
        <div class='nav-pages-balk'>
            <a class='text-nav-index'>Home</a>
            <a class='text-nav-index'>Nieuws</a>
            <a class='text-nav-index'>Menu</a>
            <a class='text-nav-index'>Contacten</a>
        </div>
        <div class="login--button-nav">
            <a class='login-text'>Login</a>
        </div>
    </nav>
    <div class='main-page'>
        <div class="img-line-1">
            <img src="assets/image-landing-1.jpg" height="100px" width="100px" alt="image nt loading">
        </div>
        <div class="img-line-2"></div>
    </div>
    <form class='register_form' name="register" method="POST" action="pages/register.php">
        <h3>Register now!</h3>
        <div class='row'>
            <p>Naam: </p>  
            <input type="text" name="naam"/>          
        </div>
        <div class='row'>
            <p>Leeftijd: </p>  
            <input type="text" name="leeftijd"/>          
        </div>
        <div class='row'>
            <p>Algemene voorwaarden: </p>  
            <input type="checkbox" name="av"/>          
        </div>
        <div class='row'>
            <p>geslacht: </p>  
            <input type="text" name="geslacht"/>          
        </div>
        <div class='row'>
            <input type="submit" name="submit" value='send'/>          
        </div>
 
    </form>
</body>
</html>
