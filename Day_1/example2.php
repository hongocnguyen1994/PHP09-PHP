<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Example1 - Day 1</title>
</head>
<body>
	<?php
		$number = 4;
		$language = "vn";
		$arrayen = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
		$arrayvn = array("Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật");
		for($i=2;$i<=8;$i++)
		{
			if($number==$i){
				if($language=="vn") echo $arrayvn[$i-2];
				else echo $arrayen[$i-2];
			}
		}
	?>
</body>
</html>