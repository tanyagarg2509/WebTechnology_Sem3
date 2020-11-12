<?php 
include('connect.php');
session_start();

if(isset($_POST["submit"]))
{
	if(empty($_POST["email"]) || empty($_POST["pswd"]))
	{
        $_SESSION['failure'] = "Please Enter both Email and Password";
		header("location: login.php");
	}
	else
	{
		// Define $username and $password
		$usermail=$_POST['email'];
		$upassword=$_POST['pswd'];
		$usermail = mysqli_real_escape_string($conn, $usermail);
		$upassword = mysqli_real_escape_string($conn, $upassword);
		
		$sql="SELECT * FROM Login WHERE email='$usermail' and password='$upassword' ";
		$result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) == 1)
		{
                $row1 = $result->fetch_assoc();
                $_SESSION['user_email'] = $row1["email"];
                $_SESSION['user_name'] = $row1["name"];
				$_SESSION['ctoken'] = md5(uniqid(mt_rand(), true));
				header("location: welcome.php"); // Redirecting To Other Page
        }
        else
		{
                $_SESSION['failure'] = "Invalid Email or Password";
				header("location: login.php");
        }
    }

} 

?>

