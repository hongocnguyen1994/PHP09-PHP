<?php 

tao form dang nhap binh thuong
input username
input  password

post vao 

$username = $_POST['username'];
$password = $_POST['password'];
if($username == 'admin' && $password == '123456'){
	$_SESSION['login'] = $username;
	header('Location: login_success.php');
	//o trang login success se hien thi
	// Welcome admin - Welcome $_SESSION[admin]
}else{
	//login khong thanh cong
}

$goto = $_GET['go'];
$id   = $_GET['id'];
$name   = $_GET['name'];
var_dump($goto);
var_dump($id);
var_dump($name);
exit();

if($goto == 'cookie'){
	header('Location: cookie.php');
}else{
	header('Location: example1.php');
}

// Start the session
session_start();

// Define session
$_SESSION['cart'] = "product one";
$_SESSION['login'] = "admin";
// use session
echo $_SESSION['cart'];

//delete session
session_destroy();
session_unset();
unset($_SESSION['cart']);

?>