<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="main.css">
	<title>PHP ACTIVITY 1</title>
</head>
<body>
	<header><h2>PHP ACTIVITY_1</h2></header>
 <div class="main-container">
 	<div class="child-container">

	<form method="POST" action="index.php">
		
		<label>ENTER 1ST NUMBER: </label>
		<input type="number" name="num1" required="required" class="input"><br> 
		<label>ENTER 2ND NUMBER: </label>
		<input type="number" name="num2" required="required" class="input"><br>

		<div>
		<input type="submit" name="add" value="ADD" class="btn">
		<input type="submit" name="subtract" value="SUBTRACT" class="btn">
		<input type="submit" name="multiply" value="MULTIPLY" class="btn">
		<input type="submit" name="divide" value="DIVIDE" class="btn">
		<input type="submit" name="iln" value="IDENTIFY LARGEST NO." class="btn">
		<input type="submit" name="mod" value="MODULO" class="btn">
		<button class="btn"><a href="index.php">RELOAD</a></button>
		</div>

	</form>

	</div>
 </div>

	<?php 

		if (isset($_POST['add'])) {

			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$result = $num1 + $num2;
			echo "<h1>The RESULT of $num1 & $num2 is: $result</h1>";

		}elseif (isset($_POST['subtract'])) {

			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$result = $num1 - $num2;
			echo "<h1>The RESULT of $num1 & $num2 is: $result</h1>";

		}elseif (isset($_POST['multiply'])) {

			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$result = $num1 * $num2;
			echo "<h1>The RESULT of $num1 & $num2 is: $result</h1>";
			
		}elseif (isset($_POST['divide'])) {

			$result = 0;	
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];

			if ($num2 == 0) {

				echo "<h1>Math Error! Please Try Again!</h1>";

			}else {

				$result = $num1 / $num2;
				echo "<h1>The RESULT of $num1 & $num2 is: $result</h1>";

			}

		}elseif (isset($_POST['iln'])) {

			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];

			if ($num1 > $num2) {

				echo "<h1>The RESULT of $num1 & $num2 is: $num1</h1>";

			}elseif($num1 < $num2) {

				echo "<h1>The RESULT of $num1 & $num2 is: $num2</h1>";
			}else {

				echo "<h1>Numbers are the same! Please Try Again!</h1>";

			}			
		}elseif (isset($_POST['mod'])) {

			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			
			if($num2 == 0) {

				echo "<h1>Math Error! Please Try Again!</h1>";

			} else {

				// $result = $num1 % $num2;
				$result = (fmod($num1, $num2)); 	
				echo "<h1>The RESULT of $num1 & $num2 is: $result</h1>";

			}	

		}else {
			echo "<h1></h1>";
		}

	 ?>




</body>
</html>