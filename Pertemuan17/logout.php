<?php 

session_start();
$_SESSION = [];
session_unset();
session_destroy();


setcookie('id','',time()-300);
setcookie('key','',time()-300);


header ("Location: login.php");
exit;
?>