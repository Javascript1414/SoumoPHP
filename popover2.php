<!DOCTYPE html>
<html>
<body style="text-align:center; margin-top:100px;">

<h2>PHP Popover Easy</h2>

<form method="post">
    <button name="open">Open</button>
</form>

<?php
if(isset($_POST['open']))
{
    echo "<div style='display:block; border:1px solid black; width:200px; margin:auto; padding:10px;'>
            Hello User
          </div>";
}
?>

</body>
</html>