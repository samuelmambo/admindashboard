<?php
$msg='';
 require_once('processRegister.php')



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <div class="header text-center text-white">
        <h1>Zalego|Admin Register</h1>
    </div>
    <br>
    <br>
    <br>
    <div class="text-center">
        <img src="zalego.jfif" alt="Logo" class="rounded-circle">
        <span><?php echo $msg ?></span>
    </div>
    <br>
    <br>
    <div class="container shadow p-3 mb-5 bg-white rounded">
        <div class="card-body ">
            <form action="register.php" method="POST">
                <div class="row">
                    <div class="mb-3 col-lg-12">
                        <label for="username" class="form-label font-weight-bold">username:</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-12">
                        <label for="email" class="form-label font-weight-bold">Email:</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-12">
                        <label for="passwrod" class="form-label font-weight-bold">Password:</label>
                        <input type="text" name="passwrod" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-12">
                        <label for="confirm Password" class="form-label font-weight-bold">Confirm Password:</label>
                        <input type="text" name="confirm Password" class="form-control">
                    </div>
                </div>
                <button type="submit" name="signup" class="btn btn-primary">Submit</button>
                <p>
                    Have no account?Sign in <a href="login.html">Here</a>
                </p>

            </form>
        </div>
    </div>











    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>