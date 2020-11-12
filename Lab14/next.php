<html>
<body>
<h1>Accessing Cookies!!</h1> <br>
<div >
<?php
    $cookie_name = "myname";
    if(!isset($_COOKIE[$cookie_name])) 
    {
        echo "Cookie name is not set!<br>";
    } else 
    {
        echo "My User Name is '<b>" . $_COOKIE[$cookie_name] . "</b>'<br>";
    }

    $cookie_email = "mymail";
    if(!isset($_COOKIE[$cookie_email])) {
    echo "Cookie Mail is not set!<br>";
    } 
    else {
    echo "My User Email Id is '<b>" . $_COOKIE[$cookie_email] . "</b>'<br>";
    }
?>
</div>
</body>
</html>
