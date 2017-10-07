<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Nhập thuốc</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style_home.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device, initialscale=1">
<body>
    <header>
    	<p id="nameHeader" style="text-align: center; font-size: 30px;">PHIẾU NHẬP HÀNG</p>
    </header>
    <div id="body">
        <form action="" name="Student form" method="post" style="margin-left: 62px;">
            <input type="submit" name="submit" value="Cập nhật">
            <input type="text" name="drug_code" placeholder="Mã" style="width: 217px;">
            <input type="text" name="drug_name" placeholder="Tên hàng" style="width: 280px;">
            <input type="text" name="drug_unit" placeholder="Đơn vị" style="width: 185px;">
            <input type="text" name="quantity" placeholder="Số lượng" style="width: 243px;">
            <input type="text" name="drug_unit_price" placeholder="Đơn giá" style="width: 200px;">
            
        </form>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "drug_db";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $database);

            if($_SERVER['REQUEST_METHOD']=="POST") {
                $drug_code = $_POST['drug_code'];
                $drug_name = $_POST['drug_name'];
                $drug_unit = $_POST['drug_unit'];
                $quantity = $_POST['quantity'];
                $drug_unit_price = $_POST['drug_unit_price'];

                $sql = "INSERT INTO drug (drug_code, drug_name, drug_unit, quantity, drug_unit_price)
                VALUES ('$drug_code', '$drug_name', '$drug_unit', '$quantity', '$drug_unit_price')";

                if(mysqli_query($conn, $sql)) {
                    $set = mysqli_query($conn, "SELECT * FROM drug;");
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
        ?>
        <div id="table">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã</th>
                        <th>Tên hàng</th>
                        <th>Đơn vị</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                    </tr>
                </thead>
                <tbody>
                    <script type="text/javascript">var i=1;</script>
                    <?php 
                        $set = mysqli_query($conn, "SELECT * FROM drug;");
                        while($db = mysqli_fetch_row($set)) {
                        echo "  <tr>
                                    <td>
                                        <script type='text/javascript'>
                                            document.write(i);
                                            i=i+1;
                                        </script>
                                    </td>
                                    <td>" . $db[1] . "</td>
                                    <td>" . $db[2] . "</td>
                                    <td>" . $db[3] . "</td>
                                    <td>" . $db[4] . "</td>
                                    <td>" . $db[5] . "<button style='float: right;'>X</button>" . "</td>
                                </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>