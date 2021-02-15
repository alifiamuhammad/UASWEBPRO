<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email_user'])) {

    include "db_conn.php";

if (isset($_POST['op']) && isset($_POST['np'])&& isset($_POST['nn'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$nn = validate($_POST['nn']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);
    
    if(empty($op)){
      header("Location: change.php?error=Old Password is required");
	  exit();
    }else if(empty($np)){
      header("Location: change.php?error=New Password is required");
	  exit();
    }else if($np !== $c_np){
      header("Location: change.php?error=The confirmation password  does not match");
	  exit();
    }else {
    	// hashing the password
    	$op = md5($op);
		$nn = md5($nn);
    	$np = md5($np);
        $id = $_SESSION['id'];

        $sql = "SELECT password
                FROM users WHERE 
                id='$id' AND password='$op'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE users
        	          SET password='$np',name='$nn'
        	          WHERE id='$id'";
        	mysqli_query($conn, $sql_2);
        	header("Location: change.php?success=Your password has been changed successfully");
	        exit();

        }else {
        	header("Location: change.php?error=Incorrect password");
	        exit();
        }

    }

    
}else{
	header("Location: change.php");
	exit();
}

}else{
     header("Location: index.php");
     exit();
}