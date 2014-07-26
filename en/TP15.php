<?php 
	header( "HTTP/1.1 301 Moved Permanently" );
	header('Location: TP-15.php');
	$title = "TesPro: TP-15 Dual-frequency Optical Probe For Meter Accuracy Test";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
	<div class="Products">
		<h1>TP-15 Dual-frequency Optical Probe For Meter Accuracy Test</h1>
		<table class="TwoColsLayout">
			<tr><td class="Left">
				<p>TP-15 has 2 frequencies available to the electric-pulse output: one keeps the same as the optical pulses and the other is divided by 4 from the optical pulses. Frequency changeable by a switch on top and indicated by a 2-color LED.</p>
				<h3>Features:</h3>
				<table id="SpecTable" class="List">
					<col class="Title" span="1" />
					<col span="1" />
					<tr>
						<td>Power: </td><td>DC 5V±10%, ≤20mA.</td>
					</tr>
					<tr>
						<td>Output: </td><td>High level ≥4.0V, low level ≤0.3V, positive electric pulses.</td>
					</tr>
					<tr>
						<td>Fastening:</td><td>Strong magnetic adhesion.</td>
					</tr>
					<tr>
						<td>Out Lead:</td><td>Straight or spiral cable available, any kind of connectors can be specified (Please refer to <a href="en/TP1_option_table.php">Table of connectors for optical probes</a>.</td>
					</tr>
					<tr>
						<td>Color:</td><td>Bluish-grey, dark-blue, orange, grey.</td>
					</tr>
				</table>
			</td><td class="Right">
				<img src="images/products/product_TP15.jpg" alt="TP15 2-Frequency Optical Probe for Scanning" />
			</td></tr>
		</table>
		<?php include("list_probes.php") ?>
	</div>
</div><!--End of content-->
<?php include("../includes/Google_ProbeAdsTracking.php") ?>
<?php include("footer.php") ?>