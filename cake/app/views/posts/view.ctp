<h1>
<?php
	$html->addCrumb("ふにらview","");
	echo $html->getCrumbs(" > ", "ふにらポータルNew！");
?>
</h1>
<p><small>Created; <?php echo $post["Post"]["created"] ?></small></p>
<p><?php echo $post["Post"]["body"] ?></p>
