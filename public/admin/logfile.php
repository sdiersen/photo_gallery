<?php require_once("../../includes/initialize.php"); ?>

<?php
	if(!$session->is_logged_in()) {
		redirect_to("login.php");
	}
?>

<?php 
	$message = Logger::log_exists();
		
	if (isset($_GET['clear']) && $_GET['clear'] == 'true') {
		if (Logger::clear_log()) {
			$user = User::find_by_id($session->user_id);
			$log_message = $user->username . " cleared the log.";
			$message = Logger::log_action('Clear', $log_message);
			if ($message == "OK") {
				$message = "";
				redirect_to('logfile.php');
			}
		} else {
			$message = "Unable to clear log file.";
		}
	} else {
		if ($message == "OK") {
			$content = Logger::read_log_formatted();
			$message = "";
			if (!$content) {
				$message = "Log file is not reaable.";
			}
		}
	}
?>

<?php include_layout_template('admin_header.php'); ?>

<a href="index.php">&laquo; Back</a><br>

<?php echo output_message($message); ?>

<h2>Log File</h2>

<p><a href="logfile.php?clear=true">Clear log file</a></p>

<?php if ($content) { echo $content; } else { echo "Log Empty"; } ?>

<br>

<?php include_layout_template('admin_footer.php'); ?>
