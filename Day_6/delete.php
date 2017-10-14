<?php  include 'connect.php';?>
<?php 
	$idDelete = $_GET['id'];

	$sqlSelectAll    = "SELECT * FROM users";
    $resultSelectAll = $conn_php09_basic->query($sqlSelectAll);
    
    if($resultSelectAll->num_rows < 3) {
    	echo "<script type='text/javascript'>alert('no less than 3 members');</script>";
    }
    else {
    	$sqlDeleteUser = "DELETE FROM users WHERE id = $idDelete";
		$resultDeleteUser = $conn_php09_basic->query($sqlDeleteUser);
		header("Location: select.php");
    }
?>