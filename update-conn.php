<?php
	session_start();

	include_once 'db-connection.php';
    $id = $_GET['id'];

	if(isset($_POST['submit']))
	{
		// print_r($_POST);die();
		$name   									    = 	$_POST['name'];
		$email											=	$_POST['email'];
		$gender											=	$_POST['gender'];
		$status										    =	$_POST['status'];

        mysqli_query($conn,"UPDATE user_practice set 
        name = '$name',
        email = '$email',
        gender = '$gender',
        status = '$status'
        WHERE id = '$id'
        ");
		

        $_SESSION['success_message'] = " successfully filled form";	
			header('location:list.php');
			mysqli_query($conn,"INSERT INTO user_practice( name,email,gender,status)
			VALUES('$name', '$email','$gender','$status')");
	}
	
?>