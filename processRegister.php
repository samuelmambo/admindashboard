<?php
 require_once('connection.php');

 if(isset($_POST['signup']))
 {
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpass=$_POST['cpassword'];

    $passHash=md5( $password);

    $sqlusername= mysqli-query($conn,"SELECT *FROM account WHERE username ='$username' ");
    $checkUsername-mysqli_num_rows($sqlUsername);

    
    $sqlemail= mysqli-query($conn,"SELECT *FROM account WHERE username ='$email' ");
    $checkEmail-mysqli_num_rows($sqlEmail);
    
    if($checkUsername!=0){
        $msg="Username already exist";
    }
    elseif($checkEmail !=0){
        $msg="Email already in use. please try a different email address";
    }
    elseif ($password !=$cpass){
        $msg="Password do not match";
    }

    $sql=mysqli_query($conn, "INSERT INTO account (username,email,password)
    VALUES('$username' ,'$email', '$passHash')");
    
    if($sql)
    {
        $msg='Data submitted succefully';
    }
    else
    {
        $msg='Error';
    }
 }
