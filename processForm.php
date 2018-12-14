<?php

$name = $_POST["name"];
$pho = $_POST["pho"];
$email = $_POST["email"];
$citystate = $_POST["citystate"];
$comments = $_POST["comments"];

$to = "falgiatoreconstruction@gmail.com";
$subject = "Website Form Request";
$headers = "Reply-To: $email";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";

$message =
	"
	<html><body><table>
	<tr><td>Name:</td><td>$name</td></tr>
	<tr><td>Phone:</td><td>$pho</td></tr>
	<tr><td>Email:</td><td>$email</td></tr>
	<tr><td>Location:</td><td>$citystate</td></tr>
	<tr><td>Request:</td><td>$comments</td></tr>
	</table></body>
	</html>
	";

mail($to, $subject, $message, $headers);

die("<span class='success'>Thank you!<br>We will be in touch soon.</span>");

?>