<?php
$message ="";
require_once('logics/dbconnection.php');

$querUser = mysqli_query($conn, "SELECT *FROM enrollment WHERE no='".$_GET['id']."' ");

while($fetchUser =mysqli_fetch_array($querUser))
{
    $id =$fetchUser['no'];
    $fullname =$fetchUser['fullname'];
    $phonenumber =$fetchUser['phonenumber'];
    $emailaddress=$fetchUser['emailaddress'];
    $gender =$fetchUser['gender'];
    $course =$fetchUser['course'];
    
}


//update user records
if(isset($_POST['updateRecords']))
{
    // fetch form data
    $name =$_POST['fullname'];
    $phoneNumber =$_POST['phonenumber'];
    $emailAddress=$_POST['emailaddress'];
    $formGender =$_POST['gender'];
    $formCourse =$_POST['course'];

    // update records
    $updateQuery =mysqli_query($conn ,"UPDATE enrollment SET fullname='$name' ,phonenumber='$phoneNumber',
    emailaddress='$emailAddress',gender='$formGender', course='$formCourse ' 
    WHERE no='".$_GET['id']."'");


 if($updateQuery)
 {
    $message= "Data updated";
 }
 else{
    $message= "Error occured";
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
                            <h4>Edit Student:
                                
                            </h4>
                            <span ><?php echo $message ?></span>
                        </div>
                        <div class="card-body">
                            <form action="edit-enrollment.php?id=<?php echo $id ?>" method="POST">
                                <div class="row">
                                    <div class="mb-3 col-lg-6 ">
                                        <label for="firstname" class="form-label font-weight-bold">Full Name :</label>
                                        <input type="text" name="fullname" value="<?php echo $fullname ?>"
                                            class="form-control shadow p-3 mb-5 bg-light rounded"
                                            placeholder="Enter your full name">
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="Phone Number" class="form-label font-weight-bold">Phone Number
                                            :</label>
                                        <input type="text" name="phonenumber" value="<?php echo $phonenumber ?>"
                                            class="form-control shadow  mb-5 bg-light rounded" placeholder="+2547">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-lg-6 ">
                                        <label for="Email Address" class="form-label font-weight-bold">Email Address
                                            :</label>
                                        <input type="tel" name="emailaddress" value="<?php echo $emailaddress?>"
                                            class="form-control shadow mb-5 bg-light rounded"
                                            placeholder="Please enter your email">
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="Gender" class="form-label  font-weight-bold">What's your
                                            gender?</label>
                                        <select name="gender"  class="form-control shadow mb-5 bg-light rounded">
                                            <option class="font-weight-bold"><?php echo $gender ?></option>
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
                                        <option><?php echo $course ?></option>
                                        <option value="Android App Development">Android App Development</option>
                                        <option value="Web Design & Development">Web Design & Development</option>
                                        <option value="Data Analysis">Data Analysis</option>
                                        <option value="Cyber Security">Cyber Security</option>
                                    </select>
                                </div>

                               <div class="col-lg-6">
                                <button type="submit"  name="updateRecords" class="btn btn-outline-primary">Update Records</button>
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