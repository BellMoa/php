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
<p>����� <input type="text" name="login" placeholder="�����"></p>
<p>������ <input type="password" name="password" placeholder="pasword"></p>
<p><input type="submit"></p>
</form>
</body>
</html>