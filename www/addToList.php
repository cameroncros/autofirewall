<?php
$address = $_SERVER["REMOTE_ADDR"];
$email = $_POST["emailaddress"];
$hostnamefile = "/usr/share/nginx/html/output/hostnames";
$tempfile = "/tmp/hostnames";
include "emailAddresses.php";

if (in_array($email, $users))
{
	$safeemail = preg_replace('/[^A-Za-z0-9]/', '', $email);
		echo system( "grep -v \"$safeemail\" $hostnamefile > $tempfile");
		echo system( "echo \"$address #$safeemail\" >> $tempfile" );
		copy($tempfile, $hostnamefile);
		echo "Success, GO WATCH NETFLIX!";
} else {
	echo "Invalid Email";
}

?>
