<?php
$row = 1;
if (($handle = fopen("list.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        if($data[0] == $_POST["uname"] && $data[5] == hash("sha256", $_POST["psw"])) {
		//echo("<script type=\"text/javascript\">window.location.replace(\"http://" . $data[3] . " \");</script>");
		echo exec("ls");
		echo ("<br>");
		$sh = "docker run --rm -d --name=coder-server-" . $data[0] . " -e SUDO_PASSWORD=password -e HASHED_PASSWORD=" . $data[5] . " -v code-server-volume-" . $data[0] . ":/config code-server-cvhs &";
		exec($sh);
		echo($sh);
		fclose($handle);
		break;
        }

    }
	//echo("<script type=\"text/javascript\">window.location.replace(\"/index.html\");</script>");
fclose($handle);
//header('Location: /index.html');
}
?>
