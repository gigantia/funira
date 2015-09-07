<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset();?>
	<title>
		ふにら | <?php echo $title_for_layout;?>
	</title>
	<link rel="icon" href="<?php echo $this->webroot;?>favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo $this->webroot;?>favicon.ico" type="image/x-icon" />
	<?php echo $this->Html->css('funira.generic');?>
	<?php echo $scripts_for_layout;?>
	<script type="text/javascript">
	<!--
		function wikis(){
			document.w1.action = "http://ja.wikipedia.org/wiki/"+document.w1.wiki_word.value;
		}
		function pai(){
			window.location.href = "/pai/";
		}
		function on(){
			window.location.href = "http://www.htb.co.jp/suidou/staff/index.html";
		}
	//-->
	</script>
</head>

<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link('All FuniraPortal services are online.', 'http://www.funira.net/funira');?></h1>
			<div id="paion"><span onClick="pai();" class="pai">π</span><span onClick="on();" class="on">on</span></div>
		</div>
		<div id="content_menu">
			<div id="53cal">
				<script src="http://www.53cal.jp/parts/partsPerson2d.php?city=1120113&area=1120113128&nogov" type="text/javascript" charset="EUC-JP"></script>
			</div>
			<br><br>
			<div id="amazon_search">
				<SCRIPT charset="utf-8" type="text/javascript" src="http://ws.amazon.co.jp/widgets/q?ServiceVersion=20070822&MarketPlace=JP&ID=V20070822/JP/funira-22/8002/6422ca47-231e-4e86-9a80-68d45abd1a23"> </SCRIPT> <NOSCRIPT><A HREF="http://ws.amazon.co.jp/widgets/q?ServiceVersion=20070822&MarketPlace=JP&ID=V20070822%2FJP%2Ffunira-22%2F8002%2F6422ca47-231e-4e86-9a80-68d45abd1a23&Operation=NoScript">Amazon.co.jp ウィジェット</A></NOSCRIPT>
			</div>
			<br>
			<div id="amazon_pr">
				<iframe src="http://rcm-jp.amazon.co.jp/e/cm?t=funira-22&o=9&p=20&l=ur1&category=amazoncampaign&banner=1VACCBJ99R5VX475WAG2&f=ifr" width="120" height="90" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
			</div>
			<br>
			<div id="funirano_amazon">
			</div>
			<br>
			<div id="kakakucom">
				<?php echo $this->Html->image('gif/kakakucom_linkbanner.gif', array('alt'=>"kakakucom",'onclick' =>"location.href='http://kakaku.com/'" , 'border'=>"0")); ?>
			</div>
		</div>
		<div id="content">
			<?php $this->Session->flash();?>
			<?php echo $content_for_layout;?>
		</div>
		<div id="footer">
			<!--div id="footer_left>
				&nbsp;
			</div-->
			<div id="amazon_myshop">
				<script type="text/javascript"><!--
				amazon_ad_tag="funira-22"; 
				amazon_ad_width="468"; 
				amazon_ad_height="60"; 
				amazon_color_background="EBE8C0"; 
				amazon_color_border="386424"; 
				amazon_color_logo="DDD37F"; 
				amazon_color_text="38352A"; 
				amazon_color_link="33578B"; 
				amazon_ad_logo="hide"; 
				amazon_ad_title="ふにらの良品生活"; //--></script>
				<script type="text/javascript" src="http://www.assoc-amazon.jp/s/asw.js"></script>
			</div>
			<div id="footer_right">
				Powered by FUNITEL.&nbsp;<?php echo $this->Html->image('funitel.jpg', array('alt'=>"powered by フニテル", 'border'=>"0")); ?>
			</div>
		</div>
	</div>
</body>
</html>
