<?php
$row = 1;
if (($handle = fopen("list.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)	{
        	if($data[0] == $_POST["uname"] && $data[5] == hash("sha256", $_POST["psw"])) {
				$CONTAINER_NAME = "coder-server-" . $data[0];
				$VOLUME_NAME = "coder-server-volume-" . $data[0];
				exec("docker rm -f " . $CONTAINER_NAME);	//Removes old instances

				echo ("<br> Redirecting...");
				exec("docker run --rm -d --name=" . $CONTAINER_NAME . " -P -e SUDO_PASSWORD=password -e HASHED_PASSWORD=" . $data[5] . " -v " . $VOLUME_NAME . ":/config -v /var/run/docker.sock:/var/run/docker.sock code-server-cvhs");
				sleep(1);
				$port = exec("docker inspect --format='{{(index (index .NetworkSettings.Ports \"8443/tcp\") 0).HostPort}}' " . $CONTAINER_NAME);
				echo("<br>CMD: " . $sh . "<br>PORT: " . $port . "<br>NAME: " . $CONTAINER_NAME);
				fclose($handle);
				$ip_server = $_SERVER['SERVER_ADDR'];
				echo "IP: $ip_server";
				
				echo("<script type=\"text/javascript\">window.location = \"http://\" + window.location.hostname + \":\" + " . $port .";</script>");
		break;
        }

    }
	echo("<script type=\"text/javascript\">window.location.replace(\"/index.html\");</script>");
fclose($handle);
}
?>
