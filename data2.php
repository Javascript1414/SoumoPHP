<?php
$a=new mysqli("localhost","root","","soumo",3307);
//if($a){
    //echo "Submitted Successful";
//}
$b="use soumo";
$a->query($b);
$a->query("create table student(id int,name varchar(20),address varchar(20))");



?>