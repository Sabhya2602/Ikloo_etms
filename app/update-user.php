<?php 
session_start();
if (isset($_SESSION['role']) && isset($_SESSION['id'])) {

if (isset($_POST['user_name']) && isset($_POST['password']) && isset($_POST['full_name']) && isset($_POST['email']) && isset($_POST['phone_number']) && $_SESSION['role'] == 'admin') {
	include "../DB_connection.php";

    function validate_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$user_name = validate_input($_POST['user_name']);
	$password = validate_input($_POST['password']);
	$full_name = validate_input($_POST['full_name']);
	$email = validate_input($_POST['email']);
	$phone_number = validate_input($_POST['phone_number']);
    $id = validate_input($_POST['id']);


	if (empty($user_name)) {
		$em = "User name is required";
	    header("Location: ../edit-user.php?error=$em&id=$id");
	    exit();
	}else if (empty($password)) {
		$em = "Password is required";
	    header("Location: ../edit-user.php?error=$em&id=$id");
	    exit();
	}else if (empty($full_name)) {
		$em = "Full name is required";
	    header("Location: ../edit-user.php?error=$em&id=$id");
	    exit();
	}else if (empty($email)) {
		$em = "Email is required";
	    header("Location: ../edit-user.php?error=$em&id=$id");
	    exit();
	}else if (empty($phone_number)) {
		$em = "Phone Number is required";
	    header("Location: ../edit-user.php?error=$em&id=$id");
	    exit();
	}else {
    
       include "Model/User.php";
       $password = password_hash($password, PASSWORD_DEFAULT);

       $data = array($full_name, $user_name, $password, $email, $phone_number, "employee", $id, "employee");
       update_user($conn, $data);

       $em = "User created successfully";
	    header("Location: ../edit-user.php?success=$em&id=$id");
	    exit();

    
	}
}else {
   $em = "Unknown error occurred";
   header("Location: ../edit-user.php?error=$em");
   exit();
}

}else{ 
   $em = "First login";
   header("Location: ../edit-user.php?error=$em");
   exit();
}