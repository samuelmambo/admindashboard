
<?php
$server ="localhost";
$username ="root";
$password ="";
$database ="web2";
$conn=mysqli_connect($server, $username, $password, $database);
if( isset($_POST['submitButton']))
{
    $fullname=$_POST['fullname'];
    $phonenumber=$_POST['phonenumber'];
    $emailaddress=$_POST['emailaddress'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];
    
    $insertData = mysqli_query($conn,"INSERT INTO enrollment(fullname,phonenumber,emailaddress,gender,course) 
    VALUES('$fullname','$phonenumber','$emailaddress','$gender','$course')");
    if($insertData)
    {
        echo "Succefully Submited ";
    }
    else {
        echo "Not Successful".mysqli_error($conn); 
    }
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
       <!--navbar starts here-->
    <nav class="navbar navbar-expand-lg bg-light fixed-top-shadow">
        <div class="container">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menus">
                <div class="navbar-nav">
                    <a href="home.html" class="nav-link active">Home</a>
                    <a href="#" class="nav-link">About Us</a>
                    <a href="#" class="nav-link btn btn-primary text-white"> Register now</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
     <main class="p-5 bg-secondary text-primary  mb-4 ">
       <h1 >JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
        <span class="text-dark"> <i class="fa fa-calendar-check-o fa-3x"></i></span>
        <span class="text-dark">20th July 2020</span> <br>
        <span class="text-dark"> <i class="fa fa-map-marker fa-3x"></i>
            <span class="text-dark">Zalego Academy <br>
                                      Devan Plaza
        </span></span>
             Devan Plaza
            </span>
         </span>
       </div>
     </main>
    </div>
@@ -82,23 +83,23 @@
        <form action="enroll.php" method="POST">
            <div class="row"> 
               <div class="mb-3 col-lg-6 ">
                    <label for="firstname" class="form-label">Full Name</label>
                    <label for="firstname" class="form-label font-weight-bold">Full Name :</label>
                    <input type="text"  name="fullname" class="form-control shadow p-3 mb-5 bg-white rounded" placeholder="Enter your full name" >
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="Phone Number" class="form-label">Phone Number</label>
                    <label for="Phone Number" class="form-label font-weight-bold">Phone Number :</label>
                    <input type="text" name="phonenumber" class="form-control shadow p-3 mb-5 bg-white rounded" placeholder="+2547" >
                </div>    
            </div>
            <div class="row"> 
                <div class="mb-3 col-lg-6 ">
                    <label for="Email Address" class="form-label">Email Address</label>
                    <label for="Email Address" class="form-label font-weight-bold">Email Address :</label>
                    <input type="tel"  name="emailaddress"class="form-control shadow p-3 mb-5 bg-white rounded" placeholder="Please enter your email" >
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="Gender"  class="form-label ">What's your gender?</label>
                    <label for="Gender"  class="form-label  font-weight-bold">What's your gender?</label>
                    <select  name="gender"class="form-select shadow p-3 mb-5 bg-white rounded" >
                        <option >--Select your gender--</option>
                        <option  class="font-weight-bold">--Select your gender--</option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                </div>
            </div>
            <div>
                <p class="text-center">
                    In order to complete your registration to
                    the bootcamp,you are rquired to select one course  you
                    will be undertaking  please NOTE
                    that this will be your learning
                    track during thr 2-week
                    immersion.
                </p>
            </div>
            <div>
                <label for="course" class="form-labl=el">What's your preffered course?</label>
                <select class="form-select shadow p-3 mb-5 bg-white rounded" name="course">
                    <option >--Select your course--</option>
                    <option value="Android App Development">Android App Development</option> 
                    <option value="Web Design & Development">Web Design & Development</option>
                    <option value="Data Analysis">Data Analysis</option>
                    <option value="Cyber Security">Cyber Security</option>
                </select>
            </div>
            <p>
                You agree by providing your information you understand all our data privacy and privacy  and  protection policy <br>
                outlined in our Terms & Condition and the Privacy Policy statement.
            </p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                 <p>Agree terms and condition.</p>
                </label>
            </div>
            <button type="submit" name="submitButton" class="btn btn-primary">Subscribe application</button>
            
        </form> 
        </div>
    </div>
    <div class="text-center">
        <p>
            subsrcibe to get information,latest news About
            <p >Zalego Academy</p>
        </p>
        <label for="email"></label>
        <input type="text" placeholder="Your email address">
        <button type="submit" name="submitButton" class="btn btn-primary" >Subscribe</button>
    </div>
    <hr>
    <footer>
        &copy;Company2022
    </footer>
    
    <script src="jquery.min.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
