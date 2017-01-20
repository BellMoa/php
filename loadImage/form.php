<html>
<head><title>Загрузка изображения</title>
    <meta charset="utf-8">
</head>
<body>
<form action="/upload.php" method="post" enctype="multipart/form-data">
<table style="border: 1px solid black; border-collapse: collapse">
    <th colspan="2">Форма загрузки</th>
    <tr>
        <td style="border: 1px solid black">Выберите ваш файл</td>
        <td style="border: 1px solid black"><input type="file" name="image"></td>
    </tr>
    <tr>
        <td colspan="2" style="border: 1px solid black; text-align: center" ><input type="submit" name="submit" value="отправить"></td>
    </tr>
</table>
</form>
</body>
</html>
