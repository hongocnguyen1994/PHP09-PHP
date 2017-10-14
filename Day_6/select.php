<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Add user</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device, initialscale=1">
</head>
<body>
	<?php include 'connect.php'; ?>
	<?php 
		$sqlSelectUser    = "SELECT * FROM users";
		$resultSelectUser = $conn_php09_basic->query($sqlSelectUser);
	?>
	<h1>List user information</h1>
		<p><a href='add.php'>Add users</a></p>
		<div id="table">
	        <table class="table table-striped">
	            <thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Username</th>
						<th>Password</th>
						<th>Avatar</th>
						<th>Action</th>
					</tr>
				</thead>
	            <tbody>
	                <?php
						if ($resultSelectUser->num_rows > 0) {
							//show list users
							$i = 1;
							while($elementUser = $resultSelectUser->fetch_assoc()) {
								$avatar = $elementUser['avatar'];
								$id     = $elementUser['id'];
								echo "<tr>";
									echo "<td>".$i."</td>";
									echo "<td>".$elementUser['name']."</td>";
									echo "<td>".$elementUser['username']."</td>";
									echo "<td>".$elementUser['password']."</td>";
									echo "<td>"."<img src='uploads/$avatar' width=100px height = 150px>"."</td>";
									echo "<td><a href='edit.php?id=$id'>Edit</a>|
											<a href='delete.php?id=$id'>Delete</a></td>";
								echo "</tr>";
								$i++;
							}
					?>
	            </tbody>
	        </table>
	    </div>
		<?php }else{
			echo "No user";
		}
	//var_dump($resultSelectUser);exit();
		?>
</body>