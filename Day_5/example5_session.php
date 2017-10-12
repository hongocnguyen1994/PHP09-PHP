<?php
	// Start the session
	session_start();

	// Define session
	$_SESSION['cart'] = "product one";

	// Use session
	echo $SESSION['cart'];

	// Delete session
	session_destroy();
	session_unset();
	unset($_SESSION['cart']);

	
?>