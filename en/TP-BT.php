<?php 
	$title = "TesPro: TP-BT Bluetooth Optical Probe";
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
					<h1>TP-BT Bluetooth Optical Probe</h1>
					<h3>Application</h3>
					<p>TP-BT is a new series of Tespro optical probe family. It work with all Bluetooth enabled devices.</p>
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
							<tr><th>Bluetooth Standard: </td><td>Complied with IEC62056-21 standard</td></tr>
							<tr><th>Max distance of communication: </td><td>10 Meters</td></tr>
							<tr><th>Battery: </td><td>Up to 24 hours with every fully charged</td></tr>
							<tr><th>Indicators: </td>
								<td>
									<ul>
										<li>Remaining battery</li>
										<li>Communication states</li>
									</ul>
								</td>
							</tr>
						</tbody>
					</table>
			</td><td class="Right">
				<img src="images/products/product_TP-BT.jpg" width="250" alt="TP-BT-IEC/ANSI Bluetooth Optical Probe ">
			</td></tr>
		</table>
		<?php include("list_probes.php") ?>
	</div>
</div><!--End of content-->
<?php include("../includes/Google_ProbeAdsTracking.php") ?>
<?php include("footer.php") ?>