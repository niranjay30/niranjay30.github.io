<?php
	if (isset($_POST['submit'])) {
		$firstName = $_POST['name'];
		$lastName = $_POST['last'];
		$mailFrom = $_POST['mail'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		$mailTo = "niranjaybhosale99@gmail.com";
		$headers = "From: ".$mailFrom;
		$txt = "You have received an e-mail from ".$name.".\n\n.".$message;

		mail($mailTo, $subject, $txt, $headers);
		header("Location: index.php?mailsend");
	}
?>