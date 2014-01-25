<?php 
	header( "HTTP/1.1 301 Moved Permanently" );
	header('Location: TP-18.php');

	$title = "TesPro: TP-18 Slim Optical Probe";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div class="Shadow1"></div>
<div class="Shadow2"></div>
<div class="Shadow3"></div>
<div id="Content"><!--Start of content-->
	<div class="Products">
		<h1>TP-18 Slim Optical Probe</h1>
		<table class="TwoColsLayout">
			<tr><td class="Left">
				<p>TP-18 Slim Optical Probe has been designed mainly for meter active and reactive accuracy testing at the same time. </p>
				
				<h3>Specifications:</h3>
				
				<ul>
					<li>Designed in very narrow dimension of 10mm.</li>					<li>TP-GS08 is a necessary accessory as probe fixture (please refer to TP-GS08)</li>					<li>High optical sensitivity.</li>					<li>Can be used for meter test-bench or portable test instrument.</li>					<li>Powered by DC5-12V</li>
				</ul>
				
			</td><td class="Right">
				<img src="images/products/product_TP-18.jpg" alt="TP-232-IEC Optical Probe" />
			</td></tr>
		</table>
		
		<?php include("list_probes.php") ?>
	</div>
</div><!--End of content-->
<?php include("../includes/Google_ProbeAdsTracking.php") ?>
<?php include("footer.php") ?> 