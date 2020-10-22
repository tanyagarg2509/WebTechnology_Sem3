<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP LAB </title>
</head>
<body>
<style>
.inputBox{
    display:block;
    margin:auto;
}
span{
    color:red;
    margin:10px;
}
</style>
<?php
$error = array();
$success = array();
$reverse='';
$university='';
if(isset($_GET['submit']) && $_GET['submit']=='Submit') {
    $university = $_GET['university'];
    if(strlen($university)<10 && ($university =="igdtuw" || $university=='IGDTUW')){
        $msg=" OKAY ";
        array_push($success,$msg);
        $reverse ="Reverse of given university name is:  ".strrev($university);
    } else{
        $msg='Lenght of University name cannnot be greater than 10 chars';
        array_push($error,$msg);
    }  

}
?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">

        <div class="inputBox">
            <label for="university">Enter University Name</label>
            <br>
            <input type="text" name="university" value="<?php echo $university;?>">

            <span>
                <?php 
                foreach($error as $err) {
                    echo $err;
                    echo '<br>';
                } 
                foreach($success as $suc) {
                    echo $suc;
                    echo '<br>';
                } 
                ?>
            </span>
           <div class="reverse">
                <?php
                echo $reverse;
                ?>
           </div>
        </div>
        <input type="submit" value="Submit" name="submit">
        
    </form>
</body>
</html>