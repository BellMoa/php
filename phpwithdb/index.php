<?php
require __DIR__.'/functions.php';

$resource=connectToDB();
$sql="SELECT * FROM students";
$res=readFromDB($resource,$sql);

?>
<hmtl>
    <head>
        <title>Студенты</title>
        <meta charset="utf-8">
    </head>
    <body>
    <table style="border: 1px solid black; border-collapse: collapse">
        <tr>
            <td style="border: 1px solid black;">№</td>
            <td style="border: 1px solid black;">Имя</td>
            <td style="border: 1px solid black;">Фамилия</td>
            <td style="border: 1px solid black;">Отчество</td>
            <td style="border: 1px solid black;">Кафедра</td>
            <td style="border: 1px solid black;">Курс</td>

        </tr>
        <?php foreach ($res as $value): ?>
        <tr>
            <td style="border:1px solid black"><?php echo $value['id']?></td>
            <td style="border:1px solid black"><?php echo $value['first_name']?></td>
            <td style="border:1px solid black"><?php echo $value['second_name']?></td>
            <td style="border:1px solid black"><?php echo $value['last_name']?></td>
            <td style="border:1px solid black"><?php echo $value['kafedra']?></td>
            <td style="border:1px solid black"><?php echo $value['course']?></td>

        </tr>
        <?php endforeach;?>
    </table>

    <a href="form.php"><input type="button" value="Добавить студента"></a>
    </body>
</hmtl>
