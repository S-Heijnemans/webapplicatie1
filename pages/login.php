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
    <div class='login-style-blok'>
        <div class='block-login'>
              <form class='form-login-tabel' action="login_logic.php" name='login_logic' method="POST">
                    <label>Username:</label>
                    <input type="text" name='username' placeholder="Username" required>
                    <label>Password:</label>
                    <input type="password" name='password' placeholder="Password" required>
                    <input type="submit" value="Login">
                </form>
                <a href='register.php'>register</a>
        </div>
    </div>
</div>
</body>
</html>
