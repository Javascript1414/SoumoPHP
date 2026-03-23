<!DOCTYPE html>
<html>
<head>
    <title>PHP Popover Practical</title>
    <style>

        body{
            font-family: Arial;
            text-align: center;
            margin-top: 100px;
        }

        button{
            padding: 10px 20px;
            background: blue;
            color: white;
            border: none;
            border-radius: 5px;
        }

        /* Popover */
        .popover{
            position: fixed;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background: rgba(0,0,0,0.5);
            display: none;
        }

        .popover-box{
            background: white;
            width:250px;
            padding:20px;
            margin:200px auto;
            border-radius:10px;
        }

    </style>
</head>

<body>

<h2>PHP Popover Practical</h2>

<form method="post">
    <button name="open">Open Popover</button>
</form>

<?php
if(isset($_POST['open']))
{
    echo "<div class='popover' style='display:block;'>
            <div class='popover-box'>
                <h3>Hello User</h3>
                <p>This is PHP Popover</p>
                <form method='post'>
                    <button name='close'>Close</button>
                </form>
            </div>
          </div>";
}
?>

</body>
</html>