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
    font-weight:bold;
}
h3{
    color:red;
}
p{
    color:brown;
}
</style>
<h1 style="text-align:center;">
Different Methods of Reading
</h1>
<div>
    <?php
    $myfile = fopen("studentsInfo.txt", "r") or die("Unable to open file!");
    $mywfile = fopen("example.txt", "w");

    $txt = "Reading/Writing Line by Line using fgets() & fwrite() \n";
    fwrite($mywfile, $txt);
    echo "<h3>".$txt."</h3><p>";
    while(!feof($myfile)) {
        $txt = fgets($myfile);
        fwrite($mywfile,$txt);
        echo "".$txt."<br>";
      }
    fwrite($mywfile,"\n");
    echo "</p>";

    fseek($myfile,0);
    $txt = "\nReading/Writing Full File at a time using fread() & filesize\n";
    fwrite($mywfile,$txt);
    echo "<h3>".$txt."</h3>";
    $txt = fread($myfile,filesize("studentsInfo.txt"));
    echo "<p>".$txt."</p>";
    fwrite($mywfile,$txt);


    fseek($myfile,0);
    $txt = "\nReading/Writing 1 Roll Number using fread() & byte size\n";
    fwrite($mywfile,$txt);
    echo "<h3>".$txt."</h3>";
    $txt = fread($myfile,10);
    echo "<p>".$txt."</p>";
    fwrite($mywfile,$txt);


    fseek($myfile,0);
    $b=0;
    $txt ="\nReading/Writing char by char using fgetc()\n";
    fwrite($mywfile,$txt);
    echo "<h3>".$txt."</h3><p>";
    while($b<10) {
        $txt = fgetc($myfile);
        fwrite($mywfile,$txt." ");
        echo "".$txt." ";
        $b++;
    }
    echo "</p>";
    
    
    

    fseek($myfile,0);
    $txt ="\nReading using file_get_contents() & file_put_contents() into a string.\n";
    echo "<h3>".$txt."</h3><p>";
    fwrite($mywfile,$txt);
    fclose($mywfile);
    $txt = file_get_contents("studentsInfo.txt")."\n";
    file_put_contents("example.txt", $txt,FILE_APPEND);
    echo $txt."</p>";
    fclose($myfile);
  ?>
    
</div>
    
</body>
</html>