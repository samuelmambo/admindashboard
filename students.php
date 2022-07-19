<?php
require_once('logics/dbconnection.php');

$sqlQuery =mysqli_query($conn,"SELECT *FROM enrollment");



?>




<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php') ?>
<body>
	<!-- All our code. write here   -->
	<div class="header">
	<?php require_once('includes/navbar.php') ?>

	</div>
	<div class="sidebar">
	<?php require_once('includes/sidebar.php') ?>
	</div>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>students</span>
						<a href="add-enrollment.php" class="btn btn-lg btn-danger btn-sm pull-right" >
							<i class="fa fa-plus-circle"></i>
						</a>
                      
					</div>
					<div class="card-body">
						<table class="table table-striped table-hover teble-responsive  table table-sm" style="fonr-style: 12px">
							<th>
								<tr>
									<th>No.</th>
									<th>Full Name</th>
									<th> Phone number</th>
									<th>Email</th>
									<th>Gender</th>
									<th>Course</th>
									<th>Enrolled On</th>
									<th>Actions</th>
								</tr>
							</th>
							<tbody>
								<?php while($fetchRecords=mysqli_fetch_array($sqlQuery)) { ?>
									<tr>
										<td><?php echo  $fetchRecords['no']?> </td>
										
										<td><?php echo  $fetchRecords['fullname']?> </td>
										<td><?php echo  $fetchRecords['phonenumber']?> </td>
										<td><?php echo  $fetchRecords['emailaddress']?> </td>
										<td><?php echo  $fetchRecords['gender']?> </td>
										<td><?php echo  $fetchRecords['course']?> </td>
										<td><?php echo  $fetchRecords['created_at']?> </td>
										<td>
										<a href="edit-enrollment.php?id=<?php echo  $fetchRecords['no']?>" class="btn btn-primary">
											<i class="fa fa-edit"></i>
									    </a>
										<a href="view-enrollment.php?id=<?php echo $fetchRecords['no']  ?>" class="btn btn-info">
											<i class="fa fa-eye"></i>
									    </a>
										<a href="delete-enrollment.php?id=<?php echo $fetchRecords['no'] ?>" class="btn btn-danger">
											<i class="fa fa-trash"></i>
									    </a>

										</td>
										</a>
										</td>
									</tr>

								<?php } ?>
							</tbody>
							
						</table>
					</div>
					<div class="card-footer"></div>
				</div>
			</div>
			
		</div>

	</div>















	<?php require_once('includes/scripts.php') ?>
</body>
</html>
