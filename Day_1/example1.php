<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Example1 - Day 1</title>
</head>
<body>
	<?php
		$name = "Ho Ngoc Nguyen";
		echo "Số ký tự của tên: " . strlen($name) . "<br>";
		echo "Số chữ của tên: " . str_word_count($name) . "<br>";
		echo "Chữ N đứng ở vị trí thứ: " . strpos($name, "n") . "<br>";
		echo "Thay thế chữ lót bằng chữ PHP09: " . str_replace("Ngoc", "PHP09", $name) . "<br>";
		$array = array();
		explode(' ', $name);
		for($i=0 ; $i<n ; $i++)
		{
			echo $array($i);
		}
		echo "Đổi ngược: " . strrev($name);
	?>
</body>
</html>