<?php
 include "includes/function.php";


$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
$email = $_POST['email'];
$houseNum = $_POST['houseNum'];
$barangay = $_POST['barangay'];
$phoneNum = $_POST['phoneNum'];
$password = $_POST['password'];
$repeatpass = $_POST['repeatpass'];
	
if($password==$repeatpass)
{
	//Go to function.php SetData
    SetUserInfoData($lastName, $firstName, $email, $houseNum, $barangay, $phoneNum, $password);
	echo "<script>alert('Register Successful')</script>";
	header("Location: login.html");
}

else
{
    echo "<script>alert('Password does not match')</script>";
	echo "<script>window.location = 'signup.html'</script>";
}
    

?>