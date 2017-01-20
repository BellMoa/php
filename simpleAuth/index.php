<?php
function isUser(){
    return isset($_COOKIE['auth']);
}


function getUser(){
    return $_COOKIE['auth'];
}


if (!isUser()){
    header('Location: /form.php');
}
if ($_POST['submit']){
    setcookie('auth','',-86400);
    header('Location: /form.php');
}

echo 'Добро пожаловать '.getUser();
?>
<form action="index.php" method="post">
    <input type="submit" value="Выход" name="submit">
</form>
