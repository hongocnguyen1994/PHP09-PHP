<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Homework</title>
</head>
<body>
	<?php
		$name = array("Ho Ngoc Nguyen", "Nguyen Nam", "Vo Van Tuan", "Le Thi Ngoc", "Nguyen Van A");
		$birthday = array("1994", "1995", "1996", "1993", "2000");
		$sex = array("Male", "Male", "Male", "Female", "Male");
		$school = array("Duy Tan", "Bach Khoa", "Duy Tan", "Di Lam", "Student");

		echo "<br>" . "Danh sach sinh vien co ho 'Nguyen': ". "<br>";

		for($i=0;$i<=3;$i++)
		{
			if(substr($name[$i], 0, 6)=="Nguyen")
			{
				echo $name[$i]." ".$birthday[$i]." ".$sex[$i]." ".$school[$i]."<br>";
			}
		}

		echo "<br>" . "Danh sach sinh vien Nam ten co chu 'a'". "<br>";

		for($i=0;$i<=3;$i++)
		{
			if($sex[$i]=="Male")
			{
				for($y=1;$y<=10;$y++)
				{
					if(str_word_count($name[$i])==$y)
					{
						$arrayName = str_word_count($name[$i],1);
						if(strpos($arrayName[$y-1],'a')>0)
						{
							echo $name[$i]." ".$birthday[$i]." ".$sex[$i]." ".$school[$i]."<br>";
						}
					}
				}
			}
		}

		echo "<br>" . "Danh sach sinh vien hoc Duy Tan: ". "<br>";

		for($i=0;$i<=3;$i++)
		{
			if($school[$i]=="Duy Tan")
			{
				echo $name[$i]." ".$birthday[$i]." ".$sex[$i]." ".$school[$i]."<br>";
			}
		}

		echo "<br>" . "Danh sach ban ra truong: " . "<br>";

		for($i=0;$i<=3;$i++)
		{
			if($school[$i]=="Di Lam")
			{
				echo $name[$i]." ".$birthday[$i]." ".$sex[$i]." ".$school[$i]."<br>";
			}
		}

		echo "<br>" . "Sap xep danh sach alphabe: " . "<br>";
		$numberArray=count($name)-1;
		for($i=0;$i<=$numberArray;$i++)
		{
			$student[$i] = array($name[$i],$birthday[$i],$sex[$i],$school[$i]);
		}
		sort($student);
		for($i=0;$i<=$numberArray;$i++)
		{
			echo $student[$i][0]." ".$student[$i][1]." ".$student[$i][2]." ".$student[$i][3]."<br>";
		}


	?>
</body>
</html>