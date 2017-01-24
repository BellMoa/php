<?php

function sqlConnect(){
    mysql_connect('localhost','root','');
    mysql_select_db('test');
}
function sqlQuerry($sql){
    sqlConnect();
    $res = mysql_query($sql);

    $ret=[];
    while(false!= $row=mysql_fetch_assoc($res)){
        $ret[]=$row;
    }
    return $ret;
}

function sql_exec($sql){
    sqlConnect();
    mysql_query($sql);
}