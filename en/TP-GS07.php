<?php 
	header( "HTTP/1.1 301 Moved Permanently" );
	header("Location: TP-GS.php");

	$title = "TP-GS07";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
	<div class="Products">
		<h1>TP-GS07</h1>
		<p>Content coming soon</p>
		<?php include("list_probes.php") ?>
	</div>
</div><!--End of content-->
<?php include("footer.php") ?>
<?php include("../includes/Google_ProbeAdsTracking.php") ?>