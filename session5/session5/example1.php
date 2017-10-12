<?php 
	require 'header.php';
	include_once 'header.php';
	echo "<br>";








	$myfile = fopen("demo.txt", "w") or die("Unable to open file!");

	$txt = "Them text vao file";

	fwrite($myfile, $txt);

	fclose($myfile);















	$mybirthday = '1987-11-10 09:15:56 PM';
	//$mybirthday = '1987-11-10 00:00:00 AM';
	echo date('l');

	echo "<br>";
	echo date('l',strtotime($mybirthday));
	
	echo "<br>";
	echo date('l',strtotime("-1 week"));
	
	echo "<br>";
	echo date('Y-m-d',strtotime("+1 month"));

	echo "<br>";
	echo date('l',strtotime("+3 months"));

	echo "<br>";
	echo strtotime("now");

	echo "<br>";
	echo strtotime($mybirthday);

	echo "<br>";
	echo date('Y-m-d h:i:s A',563595356);

	echo "<br>";
	echo date('Y-m-d h:i:s A',1507634459);

	echo "<br>";
	echo strtotime('next sunday');

?>