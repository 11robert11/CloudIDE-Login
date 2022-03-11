<?php
$row = 1;
if (($handle = fopen("list.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        if($data[0] == $_POST["uname"] && $data[5] == hash("sha256", $_POST["psw"])) {
		echo("<script type=\"text/javascript\">window.location.replace(\"http://" . $data[3] . " \");</script>");
		fclose($handle);
		break;
        }

    }
	 echo("<script type=\"text/javascript\">window.location.replace(\"/index.html\");</script>");
    fclose($handle);
//header('Location: /index.html');
}
?>
