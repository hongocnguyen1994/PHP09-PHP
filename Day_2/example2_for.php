<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Homework</title>
</head>
<body>
	<?php
		$n=15;
		for($i=0;$i<=$n;$i++)
		{
			if($i%3==0)
			{
				echo "$i ";
			}
		}

		echo "<br>";
		while($n > 10) {
		    echo $n;
		    break;
		} 

		echo "<br>";
		do {
			echo $n;
			break;
		} while ($n >= 15);

	?>
</body>
</html>