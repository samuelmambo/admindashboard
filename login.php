<?php

$server ="localhost";
$username ="root";
$password ="";
$database ="web2";

$conn =mysqli_connect($server ,$username,$password ,$database);
if( isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $newPass=$_POST['password'];

    $sql = mysqli_query($conn, "SELECT * FROM account WHERE username= '$username' and password='$newPass'");
    $fetch=mysqli-fetch_arry($sql);

    if($fetch >0)
    header ('location: index.php');

}



if($conn){
    echo "database connection established";
}
else{
    echo "could not connect to the database";
}





?>