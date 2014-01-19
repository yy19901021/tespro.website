<?php 
	header( "HTTP/1.1 302 Moved Permanently" );
	header('Location: products.php');
	$title = "泰易电子：TP-SZD 专用适配器";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
<div class="Products">
	<h1>TP-SZD 专用适配器</h1>
	<p>对不起，该产品信息目前尚未完成。我们将尽快更新，请过段时间再访问本网站查阅相关信息。</p>
	<?php include("list_probes.php") ?>
</div>
</div><!--End of content-->
<?php include("footer.php") ?>