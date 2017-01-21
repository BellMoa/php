<?php

function connectToDB(){
  return  mysqli_connect('localhost','root','','test');
}

function insertIntoDB($resource,$sql){
   return mysqli_query($resource,$sql);
}

function readFromDB($resource,$sql){
    $resultat=mysqli_query($resource,$sql);
    $tmp=[];
  while($row = mysqli_fetch_array($resultat)){
      $tmp[]=$row;
  }
return $tmp;
}
