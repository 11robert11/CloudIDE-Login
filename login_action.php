<?php
$row = 1;
$unameFound = 0;
if (($handle = fopen("list.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE and $unameFound == 0) {
        $num = count($data);
        $row++;
        if($data[0] == $_POST["uname"]) {
		echo($data[3]);
		echo("<script type=\"text/javascript\">window.location.replace(\"http://" . $data[3] . " \");</script>");
		fclose($handle);
		die();
		echo "ummm";
        }

    }
    fclose($handle);
	echo "asdfasdfasd";
//	header('Location: /index.html');
}
?>
