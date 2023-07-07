<?php
$uname="root";
$pass="";
$host="localhost";
$dbname="task";

$conn=mysqli_connect($host,$uname,$pass,$dbname);

if($conn){
    // echo"succes";
    
}else{
    echo"faild";
    
}
session_start();

?>