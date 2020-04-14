You typed in: <?php print $_POST['myEmail'];?>
$to = "ryan.manchanthasouk@outlook.com";
	$subject = "Email from my website";
	$body = "the user typed in ...";
  mail($to, $subject, $body);
?>