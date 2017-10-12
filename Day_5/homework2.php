<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
<body>
    <header>
    	<p id="nameHeader" style="text-align: center; font-size: 30px;">Login</p>
    </header>
	<form action="" method="post">
        <input type="text" name="userName" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
		<input type="submit" name="submit" value="Login">

	</form>
	<?php
		if($_SERVER['REQUEST_METHOD']=="POST") {
			$username = $_POST['userName'];
			$password = $_POST['password'];

			if($username == 'admin' && $password == '123456') {
				$_SESSION['login'] = $username;
				header('Location: login_success.php');
			}else {
				echo "<script type='text/javascript'>alert('Youre not admin');</script>";
			}
		}
	?>
</body>
</html>
