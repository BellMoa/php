<?php
session_start();
?>
<html>
<head>
    <title>Форма добавления</title>
    <meta charset="utf-8">
</head>
<body>
<p style="text-align: center"><?php
if (isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?></p>
<form action="/upload.php" method="post">
<table style="border:1px solid black; margin: 0 auto; border-collapse: collapse">
    <tr>
        <td style="border: 1px solid black">Имя</td>
        <td style="border: 1px solid black"><input type="text" placeholder="Имя" name="first_name"></td>
    </tr>
    <tr>
        <td style="border: 1px solid black">Фамилия</td>
        <td  style="border: 1px solid black"><input type="text" placeholder="Фамилия" name="second_name"></td>
    </tr>
    <tr>
        <td style="border: 1px solid black">Отчество</td>
        <td style="border: 1px solid black"><input type="text" placeholder="Отчество" name="third_name"></td>
    </tr>
    <tr>
        <td style="border: 1px solid black">Кафедра</td>
        <td style="border: 1px solid black"><input type="text" placeholder="Кафедра" name="kafedra"></td>
    </tr>
    <tr>
        <td style="border: 1px solid black">Курс</td>
        <td style="border: 1px solid black"><input type="text" placeholder="Курс" name="course"></td>
    </tr>
    <tr>
        <td style="border: 1px solid black; text-align: center" colspan="2" ><input type="submit"></td>
    </tr>
</table>
</form>
</body>
</html>
