<?php 

$folderSaveImage = 'images/';
$folderSaveDocument = 'documents/';
if(isset($_POST["submit"])) {
	//get type file upload
	$fileType = pathinfo($_FILES['avatarName']['name'],PATHINFO_EXTENSION);

	$fileName = strtotime('now').$_FILES['avatarName']['name'];
	if($fileType == 'jpg'){
		move_uploaded_file($_FILES['avatarName']['tmp_name'], $folderSaveImage.$fileName);
	}else{
		move_uploaded_file($_FILES['avatarName']['tmp_name'], $folderSaveDocument.$fileName);
	}
    
 } 
 //$_FILES['avatarName']['size']
 //$_FILES['avatarName']['type']

 ?>







<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
    Choose file to upload:
    <p>Name: <input type="text" name="name" id="name"></p>
    <p>File: <input type="file" name="avatarName" id="avatarId"></p>
    <input type="submit" value="Apply" name="submit">
</form>