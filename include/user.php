<?php  
	if(!@$_SESSION)
	{
		session_start();
	}
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
			$password = $user['password'];
			$cpassword = $user['cpassword'];

			$_SESSION['name'] = $name;
			$_SESSION['phone'] = $phone;
			$_SESSION['email'] = $email;
			$_SESSION['address'] = $address;

			if($name == "" || $name == null)
			{
				$_SESSION['error'] = "Name is required !";
				header('location: register.php');
				exit();
			}

			if($email == "" || $email == null)
			{
				$_SESSION['error'] = "Email is required !";
				header('location: register.php');
				exit();
			}


			if($phone == "" || $phone == null)
			{
				$_SESSION['error'] = "Phone is required !";
				header('location: register.php');
				exit();
			}


			if($password == "" || $password == null && $cpassword == "" || $cpassword == null)
			{
				$_SESSION['error'] = "Password is required !";
				header('location: register.php');
				exit();
			}

			if($password != $cpassword)
			{
				$_SESSION['error'] = 'Confirm Password do not match !';
				header('location: register.php');
				exit();
			}
			else{
				$password = md5($password);
				$s = "SELECT * FROM users WHERE email = '$email'";
				$q = mysqli_query($con,$s);

				$row = mysqli_num_rows($q);

				if($row > 0)
				{
					$_SESSION['error'] = "Your email is already registered !";
					header('location: register.php');
					exit();
				}
				else{
					$sql = "INSERT INTO users(id,name,email,phone,address,password) VALUES('','$name','$email','$phone','$address','$password')";

					$query = mysqli_query($con,$sql);

					if(!$query)
					{
						$_SESSION['error'] = die(mysqli_error($query));

						header('location: register.php');
					}
					else{
						$_SESSION['success'] = 'Successfully Register !';

						if(!$_SESSION['user_id'])
						{
							$_SESSION['user_id'] = mysqli_insert_id($query);
						}

						header('location: list.php');
					}
				}
			}
		}

		public function login($email,$password)
		{
			global $con;

			$_SESSION['email'] = $email;

			if($email == '' || $email == null)
			{
				$_SESSION['error'] = 'Email is required!';
				header('location: index.php');
				exit();
			}

			if($password == '' || $password == null)
			{
				$_SESSION['error'] = 'Password is required!';
				header('location: index.php');
				exit();
			}

			$password = md5($password);

			$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
			$query = mysqli_query($con,$sql);

			$user = mysqli_fetch_assoc($query);

			// print_r($user);

			if(count($user) > 0)
			{
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['email'] = '';
				header('location: list.php');
				exit();
			}
			else{
				$_SESSION['error'] = 'Your email and password do not match!';
				header('location: index.php');
				exit();
			}

		}


		public function getUserList()
		{
			global $con;

			if($_SESSION['user_id'])
			{
				$sql = "SELECT * FROM users";
				$query = mysqli_query($con,$sql);

				$users = mysqli_fetch_all($query,MYSQLI_ASSOC);

				return $users;
			}
			else{
				header('location: index.php');
				exit();
			}

		}

	}

?>
