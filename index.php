<?php
session_start();
$_SESSION['user'] = (isset($_GET['user']) === true) ? (int)$_GET['user'] : 0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>arrChat</title>
	<link rel="stylesheet" type="text/css" href="css/chat.css">
</head>
<body>
	<div class="chat">
		<div class="messages">
			
		</div>
		<textarea class="entry" placeholder="Howdy ho"></textarea>
	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/chat.js"></script>
</body>
</html>