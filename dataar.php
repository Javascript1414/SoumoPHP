<?php
print_r($_POST);
if($_SERVER['REQUEST_METHOD']=="POST"){
$ID=$_POST["id"];
$Name=$_POST["name"];
$Address=$_POST["Address"];
$a=new mysqli("localhost","root","","test",3307);
$a->query("insert into santra values('$ID','$Name','$Address')");

echo "ID: $ID <br>";
echo "Name: $Name <br>";
echo "Address: $Address <br>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>FROM</h2>
    <form method="post">
        id:
        <input name="id" placeholder="Enter Your id"><br>
        Name:
        <input name="name" placeholder="Enter Your Name"><br>
        Address:
        <input name="Address" placeholder="Enter Your Address"><br>
        <button>SUBMIT</button>
</form>
</body>
</html>