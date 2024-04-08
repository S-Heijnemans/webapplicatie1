<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

if ($_SESSION["id"] < 2) {
    ?>
        <link rel="stylesheet" href="../css/main.css">

    <nav>
    <div class='blok-nav-1'>
        <div class='nav-pages-balk'>
         <a class='text-nav-index'>Home</a>
         <a class='text-nav-index'>Nieuws</a>
         <a class='text-nav-index' href="menu_dashboard.php">Menu</a>
         <a class='text-nav-index'>Contacten</a>
        </div>
    </div>
</nav>

<div class='main-page'>
    <div class='opmaakblok-main-page'></div>
        <div class='main-container'>

           <div class='container-left'>
            <div class='eerstelaag-main-links'>
                <div class='tweedelaag-main-links'>
                    <div class='titelblok-main-links'>
                        <a class="titel-OVER_ONS">OVER ONS</a>
                    </div>
                    <div class='textblok-main-links'>
                        <a class='text-main-links'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquet nibh praesent 
                            tristique magna sit. Sed viverra ipsum nunc aliquet bibendum enim.
                             Amet consectetur adipiscing elit ut aliquam purus sit.
                             Et malesuada fames ac turpis egestas integer eget aliquet nibh. Nunc 
                             lobortis mattis aliquam faucibus purus in. Molestie a iaculis at erat pellentesque adipiscing 
                             commodo. Felis bibendum ut tristique et egestas. Risus at ultrices mi tempus imperdiet nulla 
                             malesuada. Rhoncus est pellentesque elit ullamcorper dignissim cras.</a>
                    </div>
                </div>
            </div>
           </div>

          <div class='container-right'>
             <form action="user_delete_logic.php" name='user_delete_logic.php' method="POST">
                    <label>delete is:</label>
                    <input type="text" name='user_id' placeholder="id" required>
                    <input type="submit" value="register">
                </form>            
            </div>

          </div>

        </div>
    <div class='opmaakblok-main-page-2'></div>
</div>
<?php
}
?>

<!-- <form action="user_delete_logic.php" name='user_delete_logic.php' method="POST">
                    <label>delete is:</label>
                    <input type="text" name='user_id' placeholder="id" required>
                    <input type="submit" value="register">
                </form> -->