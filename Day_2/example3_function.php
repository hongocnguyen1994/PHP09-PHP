<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Example 3 - Function</title>
</head>
<body>

	<?php
	/*
	* reverseName function
	* example: Ho Ngoc Nguyen to Ho Nguyen Ngoc
	* created by Ho Ngoc Nguyen
	* create on 19:50 03/10/2017
	*/
		function reverseName($name){
			$arrayName = explode(" ", $name);
			$numberArrayName=count($arrayName);
			$a="";
			for($i=3;$i<10;$i++)
			{
				if($numberArrayName==$i)
				{
					$a=$arrayName[$i-2];
					$arrayName[$i-2]=$arrayName[$i-1];
					$arrayName[$i-1]=$a;
				}
			}
			$namenew=implode(" ",$arrayName);
			echo $namenew;

		}
		reverseName("Ho Ngoc Van Minh Nguyen");
	?>
</body>
</html>