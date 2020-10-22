<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
     $second="";
     $first="";
	if(isset($_POST['submit'])){
        $first = $_POST['firstNumber'];
        $second = $_POST['secondNumber'];
		switch ($_POST['submit']) {
			case 'Addition':
				$result=$_POST['firstNumber']+$_POST['secondNumber'];
				break;
			case 'Subtration':
				$result=$_POST['firstNumber']-$_POST['secondNumber'];	
			break;
			case 'Multiplication':
				$result=$_POST['firstNumber']*$_POST['secondNumber'];
			break;
			case 'Division':
				$result=$_POST['firstNumber']/$_POST['secondNumber'];
			break;
			default:
				$result="";
			break;
		}
	}
	?>
	<form action="#" method="POST">
		<input type="number" name="firstNumber" required="required" value="<?php echo $first;?>">
		<input type="number" name="secondNumber" required="required" value="<?php echo $second;?>">
		<input type="submit" name="submit" value="Addition">
		<input type="submit" name="submit" value="Subtration">
		<input type="submit" name="submit" value="Multiplication">
		<input type="submit" name="submit" value="Division">
	</form>

	<?php
	if(isset($_POST['submit'])){
		echo "<h3>Answer : $result</h3>";
	}
	?>

</body>
</html>