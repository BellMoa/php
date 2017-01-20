<?php
require __DIR__.'/controller.php';

$arr=getImagesFromFolder();

?>
<table>
    <tr>
       <?php foreach ($arr as $value):
    ?>
        <td><a href="images/<?php echo $value?>" target="_blank"><img src="images/<?php echo $value?>" alt="" width="300" height="300"></a></td>
    </tr>
    <?php endforeach;?>
    <?php  ?>

</table>
<a href="/form.php">Добавить свое изображение</a>
