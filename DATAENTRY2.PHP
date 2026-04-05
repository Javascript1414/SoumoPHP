<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    id:
    <input name="id" placeholder="Enter Your Id"><br>
    name:
    <input name="name" placeholder="Enter Your Name"><br>
    address:
    <input name="address" placeholder="Enter Your Address"><br>
    <button>SUBMIT</button>
</form>
<?php
if(isset($_POST['SUBMIT'])){
    $ID=$_POST["id"];
    $Name=$_POST["name"];
    $Address=$_POST["address"];
    $a=new mysqli("localhost","root","","soumo",3307);
    $conn=$a->query("insert into student values('$ID','$Name','$Address')");
    if($conn){
        echo "Data Successfully Inserted";
    }

}



?>
    
</body>
</html>