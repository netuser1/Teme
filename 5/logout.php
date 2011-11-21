<?php  
setcookie("username", "", time()-60);  
setcookie("password", "", time()-60);  
header("Location: login.php");  
?>