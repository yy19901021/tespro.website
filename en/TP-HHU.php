<?php 
	header( "HTTP/1.1 301 Moved Permanently" );
	header("Location: TP-PDA.php");

	$title = "TP-HHU Optical Probe for Hand Held Unit";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
	<div class="Products">
		<table class="TwoColsLayout">
			<tr><td class="Left">
					<h1>TP-HHU Optical Probe for Hand Held Unit</h1>
					<?php
						include("breadcrumnav.php");	
					?>
					<h3>Application</h3>
					<p>Explore wide application as meter reading appliance or on-site applications for HHU/PDA.</p>
					<h3>Models</h3>
					<table id="ModelTable" class="List">
						<col class="Title" span="1" />
						<col span="1" />
						<tbody>
							<tr><th>TP-HTTL</th><td>for Landtech HHU, such as 2680/2900/M73 PDA；</td></tr>
							<tr><th>TP-HTTP</th><td>for Zhenzhong HHU type of 900；</td></tr>
							<tr><th>TP-HTTJ</th><td>for JieBao HHU type of 9800/A188.</td></tr>
							<tr><th>TP-HHU/PDA</th><td>provided with connector of USB-Mini/USB-OTG, applied for PDA，iPad, Motorola 75xx, Dolphin 9700, Apple-iPad, Samsung, Lenovo etc.</td></tr>
						</tbody>
					</table>
					<h3>Specifications:</h3>
					<table id="SpecTable" class="List">
						<col class="Title" span="1">
						<col span="1">
						<tr>
							<td>Standard:</td>
							<td>Compliant with IEC or ANSI standard</td>
						</tr>
						<tr>
							<td>Signal Levels:</td>
							<td>Compliant with HHU requirement.</td>
						</tr>
						<tr>
							<td>Power Supply:</td>
							<td>DC 3.5V with 15mA in max.</td>
						</tr>
						<tr>
							<td>Maximum B.R.</td>
							<td>300-38400bps</td>
						</tr>
						<tr>
							<td>Connector:</td>
							<td>Dedicated connector to match up with HHU/PDA terminal</td>
						</tr>
						<tr>
							<td>Fastening</td>
							<td>Strong magnetic adhesion</td>
						</tr>
						<tr>
							<td>Housing</td>
							<td>Impact ABS housing</td>
						</tr>
						<tr>
							<td>Lead cable</td>
							<td>1.5 meters straight cable as normal</td>
						</tr>
					</table>

			</td><td class="Right">
				<img src="images/products/product_TP-HHU.jpg" alt="TP-HHU/PDA Optical Probe">
			</td></tr>
		</table>
		<?php include("list_probes.php") ?>
	</div>
</div><!--End of content-->
<?php include("../includes/Google_ProbeAdsTracking.php") ?>
<?php include("footer.php") ?>