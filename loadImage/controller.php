<?php
function getImagesFromFolder(){
  $images=[];
    if ($resource=opendir('./images/')){
        while(false !==($enter=readdir($resource))) {
            if ($enter !='.'&& $enter!='..'){
                $images[]=$enter;
            }
        }
    }
    return $images;
}

function checkFileSize(){
    if ($_FILES['image']['size'] > 1024*3*1024){
        header('Location: /form.php');
    }
}

function isFileUpload(){
    if (is_uploaded_file($_FILES['image']['tmp_name'])){
        $res=move_uploaded_file($_FILES['image']['tmp_name'],'./images/'.$_FILES['image']['name']);
        header('Location: /index.php');
    }
    return $res;
}