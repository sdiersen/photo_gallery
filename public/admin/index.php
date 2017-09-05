<?php
require_once('../../includes/initialize.php');

if (!$session->is_logged_in())
{
	redirect_to("login.php");
}

?>

<?php include_layout_template("admin_header.php"); ?>

<?php echo output_message($message); ?>

<h2>Menu</h2>
<p>
	<ul>
		<li><a href="logfile.php">Logfile</a></li>
		<li><a href="logout.php">Logout</a></li>
		<li><a href="show_images.php">Photo Gallery</a></li>
		<li><a href="photo_upload.php">Upload Photo</a></li>
	</ul>
	
</p>

		
<?php include_layout_template("admin_footer.php"); ?>
