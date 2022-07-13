<?php
// data base connectin
require_once('logics/dbconnection.php');
$sqlFetchEnrolledStudent = mysqli_query($conn, "SELECT *FROM enrollment WHERE no='".$_GET['id']."' ");
while ($fetchStudent=mysqli_fetch_array($sqlFetchEnrolledStudent))
{
	$fullname=$fetchStudent['fullname'];
	$emailaddress=$fetchStudent['emailaddress'];
	$phonenumber=$fetchStudent['phonenumber'];
	$gender =$fetchStudent['gender'];
    $course =$fetchStudent['course'];
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
				<div class="col-lg-6">
				 <div class="card">
					<div class="card-header text-white text-center bg-dark">
						<h4 class="card-title"> personal information</h4>
					</div>
					<div class="card-body">
						<ul class="list-group">
							<li class="list-group-item">Fullname: <span class="float-right badge badge-primary"><?php  echo $fullname?></span></li>
							<li class="list-group-item">email: <span class="float-right badge badge-success"><?php  echo $emailaddress?></span></li>
							<li class="list-group-item">phonenumber: <span class="float-right badge badge-info"><?php  echo $phonenumber?></span></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
				 <div class="card">
					<div class="card-header text-white text-center bg-dark">
						<h4 class="card-title"> other information</h4>
					</div>
					<div class="card-body">
						<ul class="list-group">
							<li class="list-group-item">course: <span class="float-right badge badge-primary"><?php  echo $gender?></span></li>
							<li class="list-group-item">gender: <span class="float-right badge badge-success"><?php  echo $course?></span></li>
							<li class="list-group-item">enrolled on: <span class="float-right badge badge-info"><?php  echo $phonenumber?></span></li>
						</ul>
					</div>
				</div>
				</div>

			</div>
        </div>

    </div>

    <?php   require_once('includes/scripts.php')?>
</body>

</html>