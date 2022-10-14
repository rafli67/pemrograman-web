<?php
session_start();

if(isset($_SESSION['username'])){
    header('Location:admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>
<body>
    <div class="tabelLogin">
        <p class="login1">Silahkan Login</p>

        <form action="index.php" method="POST">
            <label for="username">Username</label>
            <input name="username" class="form_login" type="text"/>
            <br/>
            <label for="password">Password</label>
            <input name="password" class="form_login" type="password" />
            <br/>
            <input type="submit" name="submit" class="tombol_login" value="Login"/>
        </form>
    </div>
</body>
</html>