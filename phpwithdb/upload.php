<?php
require __DIR__.'/functions.php';
session_start();
if(empty($_POST['first_name'])||empty($_POST['second_name'])||empty($_POST['third_name'])||empty('course') || empty($_POST['kafedra'])){
    header('Location: /form.php');
    $_SESSION['error']='Не все поля заполнены';
    exit;
}

$tmp_name=$_POST['first_name'];
$tmp_second_name=$_POST['second_name'];
$tmp_third_name=$_POST['third_name'];
$tmp_kafedra=$_POST['kafedra'];
$tmp_course=$_POST['course'];

$resource = connectToDB();
$sql="INSERT INTO students(first_name,second_name,last_name,kafedra,course) VALUES ('".$tmp_name."','".$tmp_second_name."','".$tmp_third_name."','".$tmp_kafedra."','".$tmp_course."')";
$result=insertIntoDB($resource,$sql);
header('Location: /index.php');
