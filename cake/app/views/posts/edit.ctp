<h1>
<?php
	$html->addCrumb("ふにらedit","");
	echo $html->getCrumbs(" > ", "ふにらポータルNew！");
?>
</h1>
<?php
	echo $form->create("Post", array("action" => "edit"));
	echo $form->input("title");
	echo $form->input("body", array("rows" => "3"));
	echo $form->input("id", array("type" => "hidden"));
	echo $form->end("Save Post");
?> 
