<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Basic Synatx of PHP</title>
	<style>
		body{
			padding: 0;
			margin: 0;
			font-size: 16px;
			color: #444;
			font-family: sans-serif;
		}
		.lead{
			font-size: 20px;
			color: #4F9504;
			padding: 20px;
		}
	</style>
</head>
<body>
	<?php
		// Single line comment

		/*
			Multi line comments
			++++++++++++++++++++++++
		*/
		echo "<p>";
		echo "Hello World";
		echo "</p>";

		echo "Hello " . " World";

		$message = '<h1>This is a string variable</h1>.';
		$message .= '<p> And am appending some content to the earlier text.</p>';

		$num1 = 30;
		$num2 = 40;
		$sum = $num1 + $num2;
		$num3 = $sum;
		$num3 += $num3;
		//$num3 = $num3 + $num3;
		$num3++;

		echo '<div class="lead">' . $message  . '</div>';

		echo '<p>The sum of ' . $num1 . ' and ' . $num2 . ' is ' . ($num1 + $num2) . '</p>';
		echo "<p>The sum of $num1 and $num2 is $sum and the value of num3++ is " .  ++$num3 . "</p>";
		echo "<p>the value of num3 is  $num3 </p>";


		echo "<h2>Post Increment</h2>";
		echo "<p>num1 is $num1 and num2 is $num2</p>";
		$new = ($num1++) + ($num2++);
		echo "<p>new is $new, num1 is $num1 and num2 is $num2</p>";

		echo "<h2>Pre Increment</h2>";
		echo "<p>num1 is $num1 and num2 is $num2</p>";
		$new = (++$num1) + (++$num2);
		echo "<p>new is $new, num1 is $num1 and num2 is $num2</p>";



	?>
</body>
</html>


