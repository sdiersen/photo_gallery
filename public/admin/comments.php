<?php require_once("../../includes/initialize.php"); ?>
<?php if(!$session->is_logged_in()) { redirect_to('login.php'); } ?>

<?php
	if(empty($_GET['id'])) {
		$session->message("No photograph ID was provided.");
		redirect_to('index.php');
	}

	$photo = Photograph::find_by_id($_GET['id']);
	if(!$photo) {
		$session->message("The photo could not be loaded.");
		redirect_to('index.php');
	}

	$comments = $photo->comments();
?>

<?php include_layout_template('admin_header.php'); ?>

<a href="show_images.php">&laquo; Back</a> 
<br><br>
<?php echo output_message($message); ?>

<h2>Comments on <?php echo $photo->filename; ?></h2>

<div id="comments">
	<?php foreach($comments as $comment): ?>
	<div class="comment" style="margin-bottom: 2em;">
		<div class="author">
			<?php echo htmlentities($comment->author); ?> wrote:
		</div>
		<div class="body">
			<?php echo strip_tags($comment->body, '<strong><em><p>'); ?>
		</div>
		<div class="meta-info" style="font-size: 0.8em">
			<?php echo $comment->datetime_to_text(); ?>
		</div>
		<div class="actions" style="font-size: 0.8em;">
			<a href="delete_comment.php?id=<?php echo $comment->id; ?>">Delete Comment</a>
		</div>
	</div>
	<?php endforeach; ?>
	<?php if(empty($comments)) { echo "No comments."; } ?>
</div>

<?php include_layout_template('admin_footer.php'); ?>