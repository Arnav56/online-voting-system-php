<?php

$connect = mysqli_connect("localhost","root","voting") or die("Couldn't connect to database ");
if($connect){
    echo "Connected to database";
}
else{
    echo "Couldn't connect to database";
}
?>