<?php
$message ="";
require_once('logics/dbconnection.php');

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
<html>
<?php   require_once('includes/headers.php')?>

<body>
    <!-- All our code. write here   -->
    <div class="header">
        <?php require_once('includes/navbar.php') ?>

    </div>

    <div class="sidebar">
        <?php   require_once('includes/sidebar.php')?>

    </div>
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-header text-center text-white bg-dark">
                            <h4>Add enrollment:
                                
                            </h4>
                            <span ><?php echo $message ?></span>
                        </div>
                        <div class="card-body">
                            <form action="add-enrollment.php" method="POST">
                                <div class="row">
                                    <div class="mb-3 col-lg-6 ">
                                        <label for="firstname" class="form-label font-weight-bold">Full Name :</label>
                                        <input type="text" name="fullname" value=""
                                            class="form-control shadow p-3 mb-5 bg-light rounded"
                                            placeholder="Enter your full name" required>
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="Phone Number" class="form-label font-weight-bold">Phone Number
                                            :</label>
                                        <input type="text" name="phonenumber" value=""
                                            class="form-control shadow  mb-5 bg-light rounded" placeholder="+2547" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-lg-6 ">
                                        <label for="Email Address" class="form-label font-weight-bold">Email Address
                                            :</label>
                                        <input type="tel" name="emailaddress" value=""
                                            class="form-control shadow mb-5 bg-light rounded"
                                            placeholder="Please enter your email" required>
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="Gender" class="form-label  font-weight-bold">What's your
                                            gender?</label>
                                        <select name="gender"  class="form-control shadow mb-5 bg-light rounded" required>
                                            <option class="font-weight-bold"></option>
                                            <option value="male">male</option>
                                            <option value="female">female</option>
                                        </select>
                                    </div>
                                </div>
                                <div>

                                </div>
                                <div  class="mb-3 col-lg-6">
                                    <label for="course" class="form-labl=el">What's your preffered course?</label>
                                    <select class="form-control shadow mb-5 bg-light rounded" name="course" >
                                        <option></option>
                                        <option value="Android App Development">Android App Development</option>
                                        <option value="Web Design & Development">Web Design & Development</option>
                                        <option value="Data Analysis">Data Analysis</option>
                                        <option value="Cyber Security">Cyber Security</option>
                                    </select>
                                </div>

                               <div class="col-lg-6">
                                <button type="submit"  name="submitButton" class="btn btn-outline-primary">submit enrollment</button>
                               </div>
                               

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php   require_once('includes/scripts.php')?>
</body>

</html>