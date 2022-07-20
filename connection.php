<?php
$server ="localhost";
$username ="root";
$password ="";
$database ="web2";

$conn =mysqli_connect($server ,$username,$password ,$database);

if(isset($_POST['signup']))
{
    $username=$_POST['username'];
    $email= $_POST['email'];
    $password=$_POST['password'];


    $insertData =mysqli_query($conn , "INSERT INTO account(username,email,password) VALUES('$username','$email','$password')");
    if($insertData)
    {
        echo "Data connection sucessfull";
    
    }
    else{
        echo "connection failed" .mysqli_error($conn);
    }
}





?>