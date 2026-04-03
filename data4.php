<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Mysql Connection</title>
</head>
<body>
    <form method="post">
    Id:
    <input name="id" placeholder="Enter Your Id"><br>
    Name:
    <input name="name" placeholder="Enter Your Name"><br>
    Address:
    <input name="Address" placeholder="Enter Your addrss"><br>
    <button>SUBMIT</button>
</form>
<?php
$a=new mysqli("localhost","root","","soumo",3307);
if($a){
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $ID=$_POST['id'];
        $Name=$_POST['name'];
        $Address=$_POST['Address'];
        $conn= $a->query("insert into student values('$ID','$Name','$Address')");
        if($conn){
            echo "Data inserted Successfully";
        }
    }

}
?>

</body>
</html>