<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Example 5 - Form</title>
</head>
<body>
	<?php
		if($_SERVER['REQUEST_METHOD']=="POST") {
			$error = array();
			$name = $_POST['name'];
			$class = $_POST['class'];
			$bday = $_POST['bday'];
			$email = $_POST['email'];

			/* Validate value name, class, birthday, email */
			if(!empty($_POST['name'])) {
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
 					$error['name'] = "Wrong name";
				}
			}
			else {
				$error['name'] = "Name is required";
			}

			if(empty($_POST['class'])) {
				$error['class'] = "Class is required";
			}

			if(empty($_POST['bday'])) {
				$error['birthday'] = "Birth day is required";
			}

			if(empty($_POST['email'])) {
				$error['email'] = "Email is required";
			}

			if(isset($error['name'])) {
				echo $error['name'] . "<br>";
			}
			else {
				echo $name . "<br>";
			}

			if(isset($error['class'])) {
				echo $error['class'] . "<br>";
			}
			else {
				echo "Your class: " . $class . "<br>";
			}

			if(isset($error['birthday'])) {
				echo $error['birthday'] . "<br>";
			}
			else {
				$partsBday = explode('-', $bday);
				echo "Your age: " . (date('Y') - $partsBday[0]) . "<br>";
			}

			if(isset($error['email'])) {
				echo $error['email'] . "<br>";
			}
			else {
				echo "Your email: " . $email . "<br>";
			}
		}
	?>
</body>
</html>