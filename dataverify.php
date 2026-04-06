<?php
$s="Soumo12365";
$b=hash("sha256",$s);
//echo $b;
if(hash_equals($b,hash("sha256",$s))){
    echo "Password Successful Verify";
}else{
    echo "Password Match unsuccesful";
}
?>