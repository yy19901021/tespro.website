<?php 
	$title = "TP-BT Bluetooth Optical Probe";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
	<div class="Products">
	<h1>TP-BT Bluetooth Optical Probe</h1>
	<?php
		include("breadcrumnav.php");	
	?>
		<table class="TwoColsLayout">
			<tr><td class="Left">
					<h3>Application</h3>
					<p>TP-BT is a new series of Tespro optical probe family. It works with all Bluetooth enabled devices.</p>
					<h3>Sub-models</h3>
					<ul>
						<li>TP-BT-IEC: Complied with IEC62056-21 standard</li>
						<li>TP-BT-ANSI-N: Complied with ANSI C12.18 standard</li>
						<li>TP-BT-ANSI-S: Complied with ANSI C12.18 optical type two standard</li>
					</ul>
					<h3>Technical Specification</h3>
					<table id="SpecTable" class="List">
						<col class="Title" span="1" />
						<col span="1" />
						<tbody>
							<tr><th>Bluetooth Standard: </td><td>Complied with 4.0/ 2.1</td></tr>
							<tr><th>Meter protocol standard: </td><td>Complied with IEC62056-21 or ANSI C12.18</td></tr>
							<tr><th>Max distance of communication: </td><td>10 Meters</td></tr>
							<tr><th>Battery: </td><td>Up to 24 hours when battery in full.</td></tr>
							<tr><th>Indicators: </td>
								<td>
									<ul>
										<li>LED green/red: indicating power on/off and remaining battery life</li>
										<li>LED blue: indicating communication states</li>
									</ul>
								</td>
							</tr>
						</tbody>
					</table>
			</td><td class="Right">
				<img src="images/products/product_TP-BT.jpg" width="250" alt="TP-BT-IEC/ANSI Bluetooth Optical Probe ">
			</td></tr>
		</table>
	</div>
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("footer.php") ?>
<?php include("../includes/Google_ProbeAdsTracking.php") ?>