<?php
require_once("../../includes/initialize.php");

$content = "";

$user = User::find_by_id($session->user_id);
$log_message = $user->username . " logged out.";
$session->logout();
$message = Logger::log_action('Logout', $log_message);
if ($message == "OK") {
	$message ="";
	$content = "{$user->username} has successfully logged out.";

} else {
	$content = "Unable to log the logout of {$user->username}.";
}
 
				
?>
<?php include_layout_template('admin_header.php'); ?>

<a href="index.php">&laquo; Back</a><br>

<?php echo output_message($message); ?>

<h2>Staff Logout</h2>
<?php echo $content; ?>			
			
<?php include_layout_template('admin_footer.php'); ?>
