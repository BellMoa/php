<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if (isset($_SESSION['error']))
{
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
<form action="login.php" method="post">
<p>Логин <input type="text" name="login" placeholder="Логин"></p>
<p>Пароль <input type="password" name="password" placeholder="pasword"></p>
<p><input type="submit"></p>
</form>
</body>
</html>