<?php 
	header( "HTTP/1.1 301 Moved Permanently" );
	header('Location: TP-17.php');

	$title = "TP-17A multi-function probe for Meter Accuracy Test";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
	<div class="Products">
		<h1>TP-17A Multi-function Probe for Meter Accuracy Test</h1>
		<table class="TwoColsLayout">
			<tr><td class="Left">
				<p>TP-17A Multi-function Optical Probe has been designed for accuracy testing of both Ferraris and static meters.</p>
				
				<h3>Features:</h3>
				
				<ul>
					<li>Can be used for Ferraris meter accuracy testing, functions change by switching. </li>
					<li>Can be used for static meter accuracy testing, functions change by switching.</li>
					<li>Power supply 5VDC, 40mA</li>
					<li>Attached: Mechanical </li>
					<li>Supported by TP-GS Versatile Probe Fixture. (Please refer to <TP-GS Versatile Probe Fixture> datasheet from Tespro web-site.)</li>
				</ul>
				
				<h3>Options</h3>
				<table id="OptionTable" class="List">
					<col class="Title" span="1" />
					<col span="1" />
					<tbody>
					<tr><th>Connectors:</th><td>Any kind of plugs are available for ordering, refer to <a href="en/TP1_option_table.php">Table of plugs for optical probes</a>.</td></tr>
					<tr><th>Outlet-line:</th><td>3M long in normal, other length as option.</td></tr>
					</tbody>
				</table>
			</td><td class="Right">
				<img src="images/products/product_TP-17.jpg" alt="TP17 Multi-function Optical Probe for Meter Accuracy Test" />
			</td></tr>
		</table>
		<?php include("list_probes.php") ?>
	</div>
</div><!--End of content-->
<?php include("footer.php") ?>
<?php include("../includes/Google_ProbeAdsTracking.php") ?>