<?php
	session_start();
	include_once 'db-connection.php';
	if(isset($_POST['submit']))
	{
		// print_r($_POST);die();
		$name   									    = 	$_POST['name'];
		$email											=	$_POST['email'];
		$gender											=	$_POST['gender'];
		$status										    =	$_POST['status'];
		

        $_SESSION['success_message'] = " successfully filled form";	
			header('location:form.php');
			mysqli_query($conn,"INSERT INTO user_practice( name,email,gender,status)
			VALUES('$name', '$email','$gender','$status')");
	}
	
?>