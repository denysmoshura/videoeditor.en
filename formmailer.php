<?php
	if(isset($_POST['submit'])){
		$to = 'denys.moshura@gmail.com';
		$from = $_POST['email'];
		$message = $_POST['message'];
		echo $from;
		echo $message;
	}
	else {
		echo 'Fehler';
	}
?>
