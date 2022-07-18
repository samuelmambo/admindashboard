<?php
$info="";
require_once('logics/dbconnection.php');

$querUser = mysqli_query($conn, "SELECT *FROM contactus WHERE no='".$_GET['id']."' ");

while($fetchUser =mysqli_fetch_array($querUser))
{
    $id =$fetchUser['no'];
    $firstname =$fetchUser['firstname'];
    $lastname =$fetchUser['lastname'];
    $phonenumber =$fetchUser['phonenumber'];
    $email=$fetchUser['email'];
    $message=$fetchUser['message'];
    
    
}


//update user records
if(isset($_POST['updateRecords']))
{
    // fetch form data
    $name =$_POST['firstname'];
    $lastname= $_POST['lastname'];
    $phone =$_POST['phonenumber'];
    $email=$_POST['email'];
    $formMessage=$_POST['message'];
    

    // update records
    $updateQuery =mysqli_query($conn ,"UPDATE contactus SET firstname='$name' ,lastname='$lastname' ,phonenumber='$phone',
    email='$email',message='$formMessage'
    WHERE no='".$_GET['id']."'");


 if($updateQuery)
 {
    $info= "Data updated";
 }
 else{
    $info= "Error occured";
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
                            <span>
                                <?php echo $info ?>
                            </span>
                        </div>
                        <div class="card-body">
                            <form action="edit-contactus.php?id=<?php echo $id ?>" method="POST">
                                <div class="row">
                                    <div class="mb-3 col-lg-6 ">
                                        <label for="firstname" class="form-label font-weight-bold">first Name :</label>
                                        <input type="text" name="firstname" value="<?php echo $firstname ?>"
                                            class="form-control shadow p-3 mb-5 bg-light rounded"
                                            placeholder="Enter your full name">
                                    </div>
                                    <div class="mb-3 col-lg-6 ">
                                        <label for="lastname" class="form-label font-weight-bold">last Name :</label>
                                        <input type="text" name="lastname" value="<?php echo $lastname ?>"
                                            class="form-control shadow p-3 mb-5 bg-light rounded"
                                            placeholder="Enter your full name">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="mb-3 col-lg-6">
                                        <label for="Phonenumber" class="form-label font-weight-bold">Phone Number
                                            :</label>
                                        <input type="text" name="phonenumber" value="<?php echo $phonenumber ?>"
                                            class="form-control shadow  mb-5 bg-light rounded" placeholder="+2547">
                                    </div>
                                    <div class="mb-3 col-lg-6 ">
                                        <label for="Email Address" class="form-label font-weight-bold">Email Address
                                            :</label>
                                        <input type="tel" name="email" value="<?php echo $email?>"
                                            class="form-control shadow mb-5 bg-light rounded"
                                            placeholder="Please enter your email">
                                    </div>

                                </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6 ">
                            <label for="message" class="form-label font-weight-bold">Message
                                :</label>
                            <input type="tel" name="message" value="<?php echo $message?>"
                                class="form-control shadow mb-5 bg-light rounded">
                        </div>

                        </div>


                        <div class="col-lg-6">
                            <button type="submit" name="updateRecords" class="btn btn-outline-primary">Update
                                Contact Us</button>
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