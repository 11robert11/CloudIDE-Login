<html>
<body>

	Welcome <?php echo  $_POST["uname"]; ?><br>
	Your password is: <?php echo $_POST["psw"]; ?>

	<?php
	$output = shell_exec('ip a');
	echo "<pre>$output</pre>";

	header('Location: //10.1.10.198:8080');
	// or die();
	exit();

	//password: 23c5c4f30c20333f5f36c427
	?>
</body>
</html>
