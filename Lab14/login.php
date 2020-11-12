<?php
include 'validate.php';
if(isset($_SESSION['failure']) && $_SESSION['failure']!=''){
    echo '<script>alert("'.$_SESSION['failure'].'")</script>'; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    h1,
    h4,
    h2 {
        text-align: center;
    }
    
    form {
        display: block;
        margin: auto;
        text-align: center;
        box-shadow: 10px 20px 30px grey;
        width: 50%;
    }
    
    input {
        margin: 10px;
        padding: 10px;
    }
</style>
<body>
    <section>
        <h2>Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter Your Email">
            </div>
            <div>
                <label for="pswd">Password</label>
                <input type="password" name="pswd" id="pswd" placeholder="Enter Your Password">
            </div>
           
            <div>
               
                <input type="submit" name="submit" value="Login">
            </div>

        </form>
    </section>
</body>
</html>