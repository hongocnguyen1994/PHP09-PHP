<?php
// create cookie
setcookie('name','Nguyen Ho Ngoc', time()+100);

// call and use cookie
echo $_COOKIE['name'];

// delete cookie
setcookie('name', '', time() - 3600);
?>