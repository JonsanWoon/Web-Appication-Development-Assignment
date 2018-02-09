<!DOCTYPE html>
<html>
	<head>
		<?php include("../includes/header.php"); ?>
    <?php include("../includes/navigation.php")?>
    <link rel="stylesheet" type="text/css" href="includes/style.css">
	</head>

	<?php
	if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$Username = $password = "";
			$usernameErr = $passwordErr ="";

			if(empty ($_POST["username"])) {$userErr = "Username is required";}
			if(empty ($_POST["password"])) {$userErr = "Password is required";}

			$Username = test($_POST["username"]);
			$password = test($_POST["password"]);

			if($Username == "username" && $password == "password")
			{
				header("Location: /Assignment/AAA_movie_library/login/admin/index.php");
				exit;
			}

			else
			{
				$message = "Wrong Username or Password, Please try again.";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}

		function test ($data)
		{
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

	?>

	<body>
		<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
			<tr>
				<td>
				<form name="loginForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()">
					<table width="100%" border="0" cellspacing="1" cellpadding="3">
						<tr>
							<td colspan="3" align="center"><h3>Login</h3></td>
						</tr>
						<tr>
							<td >Username</td>
							<td>:</td>
							<td><input name="username" placeholder="username" required="required" type="text"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td>:</td>
							<td> <input name="password" placeholder="password" required="required" type="password"></td>
						</tr>
						<tr>
							<td colspan="3" align="center"><input type="submit" name="Submit" value="Submit"></td>
						</tr>
					</table>
				</form>
				</td>
			</tr>
		</table>
	</table>
	</body>
</html>
