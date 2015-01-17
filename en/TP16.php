<?php 
	header( "HTTP/1.1 301 Moved Permanently" );
	header('Location: TP-16.php');

	$title = "TesPro: TP-16 Optical Probe for Portable Test Instruments.";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
	<div class="Products">
		<h1>TP-16 Optical Probe for Portable Test Instruments</h1>
		<table class="TwoColsLayout">
			<tr><td class="Left">
				<p>Special designed for portable meter test instrument. Connector can be chosen as required.</p>
				<h3>Sub-models</h3>
				<table id="ModelTable" class="List">
					<col class="Title" span="1" />
					<col span="1" />
					<tbody>
						<tr><th>TP-16-PRS</th><td>Compatible with <a href="http://www.mte.ch/inhalte/products/pdf/CALPORT_300_english.pdf">PRS1.3</a>.</td></tr>
						<tr><th>TP-16-PWS</th><td>Compatible with <a href="http://www.mte.ch/inhalte/products/pdf/PWS_3_3_english.pdf">PWS1.3</a>.</td></tr>
					</tbody>
				</table>
				<h3>Specifications:</h3>
				<table id="SpecTable" class="List">
					<col class="Title" span="1" />
					<col span="1" />
					<tr>
						<td>Power:</td><td>DC 12-24V.</td>
					</tr>
					<tr>
						<td>Light sense:</td><td>Sense both light and IR(Infrared) light pulses emitted by LED, then convert them to electric pulses.</td>
					</tr>
					<tr>
						<td>Output:</td><td>Positive electric pulses.</td>
					</tr>
					<tr>
						<td>Out Lead:</td><td>Straight cable, 3 meters.</td>
					</tr>
					<tr>
						<td>Fastening:</td><td>Magnetic adhesion supported by <a href="en/TP-GS.php">TP-GS</a>.</td>
					</tr>
					<tr>
						<td>Color:</td><td>Bluish-grey, dark-blue, grey.</td>
					</tr>
					<tr>
						<td>Mechanical:</td><td>Impact ABS housing.</td>
					</tr>
				</table>
				<h3>Options:</h3>
				<table id="OptionTable" class="List">
					<col class="Title" span="1" />
					<col span="1" />
					<tbody>
					<tr><th>Supporter:</th><td>TP-GS Versatile Probe Fixture, providing magnetic adhesion for all kinds of meters. Please refer to <a href="en/TP-GS.php">TP-GS Versatile Probe Fixture</a>.</td></tr>
					<tr><th>Plug adapter:</th><td>TF-L5/Ax for plug adapted from LEMO-5 to Amphenol x-pole.</td></tr>
					<tr><th>Connectors:</th><td>Any type of connectors is available for ordering. Refer to <a href="en/TP1_option_table.php">Table of plugs for optical probes</a>.
</td></tr>
					</tbody>
				</table>
			</td><td class="Right">
				<img src="images/products/product_TP16-PRS1.3.jpg" alt="TP-16 Optical Probe for Meter Accuracy Test" />
				<img src="images/products/product_TP16-PRS_02.jpg" alt="TP-16 Optical Probe for Meter Accuracy Test" />
			</td></tr>
		</table>
		<?php include("list_probes.php") ?>
	</div>
</div><!--End of content-->
<?php include("footer.php") ?>
<?php include("../includes/Google_ProbeAdsTracking.php") ?>