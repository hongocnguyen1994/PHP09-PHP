<!DOCTYPE html>
<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
    <p>Name: <input type="text" name="name" id="name"></p>
    <p>File: <input type="file" name="avatarName" id="avatarID"></p>
    <input type="submit" value="Apply" name="submit">
	
</form>

<?php
	$folderSaveImg = 'images/';
	$folderSaveDoc = 'document/';

	$uploadOk = 1;
	if(isset($_POST["submit"])) {
		$fileName = strtotime('now') . '_' . $_FILES['avatarName']['name'];
		
		$imageFileType = pathinfo($fileName,PATHINFO_EXTENSION);

		/*if($_FILES["avatarName"]["size"] > 300 ) {
    		echo "File is too large";
    		$uploadOk = 0;
		}

		if($imageFileType != "jpg" || $imageFileType != "jpeg") {
    		echo "only JPG, JPEG files are allowed";
    		$uploadOk = 0;
		}*/

		if($imageFileType == "zip" || $imageFileType == "docx" || $imageFileType == "xlsx"){
			move_uploaded_file($_FILES['avatarName']['tmp_name'], $folderSaveDoc.$fileName);
		}

		if($imageFileType == "jpg" || $imageFileType == "jpeg"){
			move_uploaded_file($_FILES['avatarName']['tmp_name'], $folderSaveImg.$fileName);
		}
	}
?>
</body>
</html>