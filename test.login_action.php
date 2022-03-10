<?php
$row = 1;
$unameFound = 0;
if (($handle = fopen("list.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE and $unameFound == 0) {
        $num = count($data);
        $row++;
        if($data[0] == $_POST["uname"] && $data[4] == hash("sha256", $_POST["password"])) {
		echo($data[3]);
		header('Location: http://'.$data[3]);
		fclose($handle);;
		die();
		echo "ummm";
        }

    }
    fclose($handle);
	header('Location: /index.html');
}
?>
