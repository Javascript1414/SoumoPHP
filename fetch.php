<?php

$a = new mysqli("localhost","root","","soumo",3307);

$result = $a->query("select * from student");

while($row = $result->fetch_assoc())
{
    echo "ID: ".$row['id']."<br>";
    echo "Name: ".$row['name']."<br>";
    echo "Address: ".$row['address']."<br>";
    echo "<hr>";
}

?>