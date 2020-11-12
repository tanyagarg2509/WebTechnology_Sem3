<!DOCTYPE html>
<?php
$cookie_name = "myname";
$cookie_value = "Tanya Garg";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30)); // 86400 =1 day
$cookie_email = "mymail";
$cookie_email_value = "tanyagarg2509@gmail.com";
setcookie($cookie_email,$cookie_email_value, time() + (86400 * 30), '/');
?>
<html>
<body style= "padding: 30px; text-align: center;">
<h2>Setting Cookies!!</h2> <br>
<h3>Press next to display cookies values</h3>
<h1 style="text-align:center;"><a href="next.php" title="next" >Next</a></h1>

</body>
</html>
