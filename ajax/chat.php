<?php 
	require_once '../core/init.php';
	if (isset($_POST['method']) === true && empty($_POST['method']) === false) {
		$chat = new Chat();
		$method = trim($_POST['method']);
		if ($method === "fetch") {
			$messages = $chat->fetch_messages();
			if (empty($messages) === true) {
				echo 'There are currently no messages in the chat';
			}else {
				foreach ($messages as $message) { ?>
				<div class="message">
					<a href="#"><?php echo $message['username']; ?></a>:
					<p><?php echo nl2br($message['message'], false); ?></p>
				</div>	
			<?php
				}
			}
		}elseif ($method === "throw" && isset($_POST['message']) === true) {
			$message = trim($_POST['message']);
			if (empty($message)===false) {
				$chat->throw_message($_SESSION['user'], $message);
			}else {
				echo "An error occured";
			}
		}
	}
?>