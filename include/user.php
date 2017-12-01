<?php  
	session_start();
	include_once('include/connect.php');

	class user{
		private $con;

		function __constructor($con)
		{
			$this->con = $con;
		}

		function register($user)
		{
			global $con;

			$name = $user['name'];
			$phone = $user['phone'];
			$email = $user['email'];
			$address = $user['address'];
			$password = md5($user['password']);

			$sql = "INSERT INTO users(id,name,email,phone,address,password) VALUES('','$name','$email','$phone','$address','$password')";

			$query = mysqli_query($con,$sql);

			if(!$query)
			{
				$_SESSION['error'] = die(mysqli_error($query));

				header('location: register.php');
			}
			else{
				$_SESSION['success'] = 'Successfully Register !';

				header('location: list.php');
			}
		}

	}

?>
