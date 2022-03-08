 b<html>
<body>

	Welcome <?php echo  $_POST["uname"]; ?><br>
	Your password is: <?php echo $_POST["psw"]; ?>

	<?php
	$output = shell_exec('ip a');
	echo "<pre>$output</pre>";

	//header('Location: //10.1.10.198:8080');
	// or die();
	//exit();

	//password: password123
	?>
<?php
$row = 1;
if (($handle = fopen("list.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        if($data[0] == $_POST["uname"])	{
		echo "Your username was found";
		break;
	}

    }
    fclose($handle);

}
echo "username not found";
?>

</body>
</html>
