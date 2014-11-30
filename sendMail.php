<?php
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$error = false;
error_reporting(E_ALL);
ini_set('display_errors', '1');
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo "<span class='red>Your email address is invalid</span>";
	$error = true;
}
if (trim($name) == '' || trim($msg) == ''){
	echo "<span class='error>Your email address is invalid</span>";
	$error = true;
}
if (!$error){
	$headers = 'From: zyssman.fr <sylvain@zyssman.fr>'."\r\n";
    $headers .= 'Mime-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
    $headers .= "\r\n";

	$topic = "Demande de contact sur zyssman.fr";
	$msg = htmlspecialchars($name). " (".htmlspecialchars($email).")<br/><br/>".htmlspecialchars($msg);
	if (mail("sylvain@zyssman.fr", $topic, $msg, $headers)){
		echo "<span class='success'>Thank you ! <br/>I'll come back to you as soon as possible</span>";
	}
	else
		echo "<span class='error>There was an error sending your message</span>";
}
?>