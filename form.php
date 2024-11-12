
<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>User form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Freight Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	
	

	
	
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	
	<link href="css/font-awesome.min.css" rel="stylesheet">
	
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

</head>

<body class="text-muted">
    <a href="list.php" class="btn btn-success">List</a>
	
	
									<form action="form-conn.php" method="post" class="p-sm-3 panel panel-body" class="color">
										 			<?php
								                if(isset($_SESSION['success_message']))
								                {

								                    echo '<div class="alert alert-success">
								                        <button type= "button" class= "cancel" data-dismiss="alert" aria-hidden="true">x</button> '.
								                    $_SESSION['success_message'].'</div>';
								                }
								                elseif(isset($_SESSION['error_message']))
								                {
								                    echo'<div class="alert alert-danger">
								                        <button  type= "button" class= "close" data-dismiss= "alert" aria-hidden= "true">x</button>'.
								                    $_SESSION['error_message'].'</div>';
								                }

								                        session_destroy();
								    			?>
																			<!-- 			<a class="btn btn-success" href="register.php">Add User</a>
																			<a class="btn btn-success" href="dashboard.php">User List</a>
																	 -->
										<div class="form-group  color">
											<b><label for="recipient-name" style="color:black;" class="col-form-label">Name</label>
											<input type="text" class="form-control" placeholder="your name" name="name" id="recipient-name" >
										</div>
										<div class="form-group">
											<label for="email" class="col-form-label" style="color:black;">Email</label>
											<input type="email" class="form-control" placeholder="******" name="email" id="" >
										</div>
                                        <br>
                                        <br>

										
                                        <label for="">Gender</label>

                                        <select name="gender" id="">
                                        <option value="">Select your gender</option>
                                        <option value="female">female</option>
                                        <option value="male">male</option>
                                        </select>
                                        <br>
                                        <br>
                                        <label for="">Status</label>

                                        <select name="status" id="">
                                        <option value="">Select your  status</option>
                                        <option value="active">active</option>
                                        <option value="inactive">inactive</option>
                                        </select>
                                        <!-- <label for="">Status</label> -->
                                        

  
										
											<input type="submit" name="submit" class="form-control bg-theme"style="background-color:submit" value="Submit">
										</div>
									</form>
						</div>
					</div>
				</div>
		</div>
	</div>


	</div>
	


</body>

</html> 