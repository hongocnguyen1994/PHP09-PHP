<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Add user</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device, initialscale=1">
<body>
    <header>
    	<p id="nameHeader" style="text-align: center; font-size: 30px;">Add User</p>
    </header>
    <div id="body">
        <form action="" name="AddUser form" method="post" style="margin-left: 62px;" enctype="multipart/form-data">
            <input type="submit" name="submit" value="Add">
            <input type="text" name="name" id="name" placeholder="Name" style="width: 280px;">
            <input type="text" name="userName" placeholder="Username" style="width: 185px;">
            <input type="password" name="password" placeholder="Password" style="width: 243px;">
            <p>Avatar: <input type="file" name="avatarName" id="avatarID"></p>
        </form>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "users_db";

            $folderSaveImg = 'images/';

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $database);

            if($_SERVER['REQUEST_METHOD']=="POST") {
                $name = $_POST['name'];
                $userName = $_POST['userName'];
                $password = $_POST['password'];

                $fileName = strtotime('now') . '_' . $_FILES['avatarName']['name'];

                $imageFileType = pathinfo($fileName,PATHINFO_EXTENSION);

                if($imageFileType == "JPG" || $imageFileType == "JPEG") {
					move_uploaded_file($_FILES['avatarName']['tmp_name'], $folderSaveImg.$fileName);
				}

                $sql = "INSERT INTO users (name, username, password, avatar)
                VALUES ('$name', '$userName', '$password', '$fileName')";

				if(mysqli_query($conn, $sql)) {
                    $set = mysqli_query($conn, "SELECT * FROM users;");
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
        ?>
        <div id="table">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>User Name</th>
                        <th>Avatar</th>
                    </tr>
                </thead>
                <tbody>
                    <script type="text/javascript">var i=1;</script>
                    <?php
                        $temporaryVar="";
                        $set = mysqli_query($conn, "SELECT * FROM users;");
                        
                        while($db = mysqli_fetch_row($set)) {
                            $temporaryVar=$db[0];
                            echo "  <tr>
                                        <td>
                                            <script type='text/javascript'>
                                                document.write(i);
                                                i=i+1;
                                            </script>
                                        </td>
                                        <td>" . $db[1] . "</td>
                                        <td>" . $db[2] . "</td>
                                        <td> <img src='images/" . $db[4] . "' style='width: 80px'</td>
                                    </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>