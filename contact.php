<?php

if (isset($PUSH_['submit'])) {
	$name = $_POST['fname'];
	$name = $_POST['lname'];
	$name = $_POST['country'];
	$name = $_POST['subject'];

	$mailTo = "ryan.manchanthasouk@outlook.com"
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;


	mail($mailTo, $subject, $txt, $headers);
	header("Loation: index.ph?mailsend")

);
	]
}