<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="user" placeholder="usuario">
    <input type="password" name="pass" placeholder="contraseña">
    <input type="submit" value="Login">
    </form>
    <?php 
    if(isset($error)) echo $error;
    ?>
</body>
</html>