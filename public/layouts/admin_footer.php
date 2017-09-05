		</div>
		<div id="footer">
			Copyright <?php echo date("Y", time()); ?>, Steve Diersen
		</div>
	</body>
</html>
<?php 
	if (isset($database)) {
		$database->close_connection();
	}
?>
