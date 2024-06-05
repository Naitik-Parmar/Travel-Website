<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "web_coding";

$con = mysqli_connect($server,$username,$password,$dbname);

if(!$con)
{
    echo "not connected";
}

// else{
//     echo "connected";
// }

//start

$username = $_POST['username'];
$em = $_POST['em'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO `test`(`username`, `em`, `phone`, `message`) VALUES ('$username','$em','$phone','$message')";

$result = mysqli_query($con,$sql);

if($result)
{
    echo "data submitted";
}
else
{
    echo "query failed...";
}

?>