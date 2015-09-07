<h1>ふにらポータルNew！</h1>
<!-- Google検索 -->
<div id="google_search">
	<form method=get action="http://www.google.co.jp/search" name="g1">
		<a href="http://www.google.co.jp/"><img src="http://www.google.com/logos/Logo_40wht.gif" border="0" alt="Google" align="absmiddle"></a><br>
		<input type=text name=q size=31 maxlength=255 value="">
		<input type=hidden name=ie value=utf-8>
		<input type=hidden name=oe value=utf-8>
		<input type=hidden name=hl value="ja">
		<input type=submit name=btnG value="Google 検索">
	</form>
</div>
<!-- Google検索 -->

<!-- Wikipedia検索 -->
<div id="wiki_search">
	<form method=post name="w1" onSubmit="wikis();">
		<?php echo $this->Html->image('png/wiki.png', array('alt'=>"wikipedia",'onclick' =>"location.href='http://ja.wikipedia.org/wiki/'" , 'border'=>"0")); ?><br>
		<input type="text" name="wiki_word" size="31" maxlength="255">
		<input type="submit" name="btnW" value="Wikipedia 検索">
	</form>
</div>
<!-- Wikipedia検索 -->

<p><?php echo $html->link('Add Post', '/posts/add'); ?></p> 
<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Created</th>
	</tr>
	<?php foreach($posts as $post): ?>
	<tr>
		<td><?php echo $post["Post"]["id"]; ?></td>
		<td>
			<?php echo $html->link($post['Post']['title'],'/posts/view/'.$post['Post']['id']);?>
			<?php echo $html->link('Delete',"/posts/delete/{$post['Post']['id']}",null,'Are you sure?')?>
			<?php echo $html->link('Edit', '/posts/edit/'.$post['Post']['id']);?>
		</td>
		<td><?php echo $post["Post"]["created"]; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
