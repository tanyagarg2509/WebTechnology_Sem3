<?php
 session_start();
 $username = $_SESSION['user_name'];
 $useremail = $_SESSION['user_email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>
        Welcome <?php echo $username;?> !!
        <br>
        Your email is <?php echo $useremail;?>
    </h1>
</body>
</html>