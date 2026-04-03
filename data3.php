<?php
$b=new mysqli("localhost","root","","soumo",3307);
//if($b){
    //echo "Access Successfully";
//}
$b->query("insert into student values(1,'Soumo','Bahirtafa')");
$b->query("insert into student values(2,'Santra','Jadurberia')");
$b->query("insert into student values(3,'Sudebi','Bahirtafa')");
$b->query("insert into student values(4,'Ranajit','Bahirtafa')");

?>