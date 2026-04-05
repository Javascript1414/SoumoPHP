<?php
print_r($_POST);
if($_SERVER['REQUEST_METHOD']=="POST"){
$ID=$_POST["id"];
$Name=$_POST["name"];
$Address=$_POST["Address"];
$a=new mysqli("localhost","root","","test",3307);
$conn= $a->query("insert into santra values('$ID','$Name','$Address')");
if($conn){
    echo "Data Successfylly Inserted";
}

echo "Name: $ID <br>";
echo "Name: $Name <br>";
echo "Address: $Address <br>";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data array</title>
</head>
<body>
    <h2>Login from</h2>
    <form method="post">
    id:
    <input name="id" placeholder="Enter Your Id No"><br>
    Name:
    <input name="name" placeholder="Enter your Name"><br>
    Address:
    <input name="Address" placeholder="Enter Your Address"><br>
    <button>submit</button>
</from>

    
</body>
</html>