<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $ID=$_POST['id'];
    $Name=$_POST['Name'];
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $Enpassword=hash("sha256",$Password);
    echo $Enpassword;
    $a=new mysqli("localhost","root","","test",3307);
    //$a->query("create table password(Id int,Name varchar(50),Username varchar(50),Enpassword varchar(1000))");
    $a->query("insert into password values('$ID','$Name','$Username','$Enpassword')");
    $result=$a->query("select Enpassword from password where Username='$Username'");
    $c=$result->fetch_assoc();
    $dbpassword=$c['Enpassword'];
    if(hash_equals($dbpassword,hash("sha256",$Password))){
        echo "Succesful Verify";
        header("location:popover.php");
    }else{
        echo "Not verify";
    };


    
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encrypted Password</title>
    <style>
        .container{
            background-color:lightblue;
            padding:30px;
            text-align:center;
        }
        </style>
</head>
<body>
<h3><center>REGISTRATION FROM</center></h3><div class="container">
<form method="post">
Id:
<input name="id" placeholder="Enter Your Id"><br>
Name:
<input name="Name" placeholder="Enter Your Name"><br>
Username:
<input name="Username" placeholder="Enter Your Username"><br>
Password:
<input name="Password" placeholder="Enter your Password"><br>
<button>SUBMIT</button>
</form>
</div>
    
</body>
</html>