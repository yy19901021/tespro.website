<?php 
	header( "HTTP/1.1 301 Moved Permanently" );
	header('Location: TP-11.php');
	
	$title = "TesPro: TP-11/TP-14 Optical Probe For Meter Accuracy Test";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
	<div class="Products">
		<h1>TP-11/TP-14 Optical Probe For Meter Accuracy Test</h1>
		<table class="TwoColsLayout">
			<tr><td class="Left">
				<p>Applied to meter accuracy test, TP-11/TP-14 optical probe can sense both light and IR(Infrared) pulses emitted by LED, and then convert them to electric pulses.</p>
				<table id="ModelTable" class="List">
					<col class="Title" span="1" />
					<col span="1" />
					<tr>
						<td>TP11:</td><td>Electric pulse output is exactly the same number as the light pulses. With GREEN LED display on top.</td>
					</tr>
					<tr>
						<td>TP14:</td><td>Electric pulse output is divided by 4 from source light pulses, with RED LED display on top.</td>
					</tr>
				</table>
				<h3>Specifications:</h3>
				<table id="SpecTable" class="List">
					<col class="Title" span="1" />
					<col span="1" />
					<tr>
						<td>Power: </td><td>DC 5V±10%, ≤10mA.</td>
					</tr>
					<tr>
						<td>Output:</td><td>High level ≥4.0V,  low level ≤0.3V, positive electric pulses.</td>
					</tr>
					<tr>
						<td>Fastening:</td><td>Strong magnetic adhesion.</td>
					</tr>
					<tr>
						<td>Out Lead:</td><td>Straight or spiral cable available, any kind of connectors can be specified (Please refer to <a href="en/TP1_option_table.php">Table of connectors for optical probes</a>. Special connectors out of the table are also available for order.</td>
					</tr>
					<tr>
						<td>Color:</td><td>Bluish-grey, dark-blue, orange, grey.</td>
					</tr>
				</table>
			</td><td class="Right">
				<img src="images/products/product_TP11_TP14.jpg" alt="TP11/TP14 Optical Probe for Scanning" />
			</td></tr>
		</table>		
		<?php include("list_probes.php") ?>
	</div>
</div><!--End of content-->
<?php include("../includes/Google_ProbeAdsTracking.php") ?>
<?php include("footer.php") ?>