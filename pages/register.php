<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<!-- register -->
<div class='container-login-page'>
    <div class='login-style-blok'>
        <div class='block-login'>
              <form action="register_logic.php" name='register_logic' method="POST">
                    <label>Username:</label>
                    <input type="text" name='username' placeholder="Username" required>
                    <label>Password:</label>
                    <input type="password" name='password' placeholder="Password" required>
                    <label>email:</label>
                    <input type="email" name='email' placeholder="email" required>
                    <input type="submit" value="register">
                </form>
        </div>
    </div>
</div>
</body>
</html>
