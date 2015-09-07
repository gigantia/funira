<h1>
<?php
	$html->addCrumb("ふにらadd","");
	echo $html->getCrumbs(" > ", "ふにらポータルNew！");
?>
</h1>
<?php
	echo $form->create("Post");
	echo $form->input("title");
	echo $form->input("body", array("rows" => "3"));
	echo $form->end("Save Post");
?>

