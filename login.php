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
    $fetch=mysqli_fetch_array($sql);

    if($fetch >0){
        $_session['login']=$username;
        header ('location: index.php');

    }
    else{
        echo  "Error ";
    }
   
}



if($conn){
    echo "database connection established";
}
else{
    echo "could not connect to the database";
}





?>