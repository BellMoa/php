<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table style="border: 1px solid black; border-collapse: collapse">
    <tr>
        <th>����������</th>
    </tr>
    <?php foreach ($items as $item): ?>
    <tr>
        <td style="border: 1px solid black"> <?php echo $item['title']?></td>
        <td style="border: 1px solid black"><img src="<?php echo $item['path']; ?>" style="max-width: 300px" alt="" ></td>
    </tr>
    <?php endforeach; ?>
</table>
<p><a href="/add.php" >�������� ����</a></p>
</body>
</html>
