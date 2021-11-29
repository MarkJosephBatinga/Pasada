<?php
    session_start();
    include "includes/function.php";
    

	$role = $_POST['role'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
    if($role=="customer")
    {

        $GetUser = GetUserInfo($email, $password);
        if($GetUser == null)
        {
            echo "<script>alert('email is null')</script>";
		    echo "<script>window.location = 'login.html'</script>";
        }
		else 
        { 
            $_SESSION["user_id"] = $GetUser;
            header("location: home.php");
 
        }
    }
    else {
        echo "<script>alert('Pick a level')</script>";
    }


?>