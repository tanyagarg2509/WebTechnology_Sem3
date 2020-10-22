<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>
</head>
<body>
<style>
div{
    margin:auto;
    text-align:center;
    color:blue;
    font-weight:bold;
}
</style>
<h1 style="text-align:center;">
File Handling Reading and Writing to a file
</h1>

<div>
    <?php
    $myfile = fopen("studentsInfo.txt", "r") or die("Unable to open file!");
    $mywfile = fopen("Tanya.txt", "w");
    while(!feof($myfile)) {
        $txt = fgets($myfile);
        fwrite($mywfile,$txt);
        echo "<h3>". $txt."</h3>";
      }
    fclose($myfile);
    fclose($mywfile);
  ?>
    
</div>
    
</body>
</html>