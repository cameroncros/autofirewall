<?php
$address = $_SERVER["REMOTE_ADDR"];
$email = $_POST["emailaddress"];
$hostnamefile = "/var/www/html/output/hostnames";
$tempfile = "/tmp/hostnames";
switch ($email) {
	case "jenniferhunter@gmail.com":
	case "cameroncros@gmail.com":
	case "dark.violin.angel@gmail.com":
	case "kieran.macfarlane@gmail.com":
	$safeemail = preg_replace('/[^A-Za-z0-9]/', '', $email);
		echo system( "grep -v \"$safeemail\" $hostnamefile > $tempfile");
		echo system( "echo \"$address #$safeemail\" >> $tempfile" );
		copy($tempfile, $hostnamefile);
		echo "Success, GO WATCH NETFLIX!";
		break;
	default:
		echo "FUCK OFF";


}

?>
