<?php 
	$title = "TesPro: TP-BT-IEC/ANSI Optical Probe";
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
					<h1>TP-BT-IEC/ANSI Optical Probe</h1>
					<h3>Application</h3>
					<p>It is a new series of Tespro optical probe family, supporting RF wireless communication for meter reading but cable connection un-reachable. Communication distance is much longer than Bluetooth.</p>
					<h3>Models</h3>
					<table id="ModelTable" class="List">
						<col class="Title" span="1" />
						<col span="1" />
						<tbody>
							<tr><th>TP-RF-IEC</th><td>Compliant with IEC 62056-21 standard</td></tr>
							<tr><th>TP-RF-ANSI-N</th><td>Complied with ANSI C12.18 standard</td></tr>
							<tr><th>TP-RF-ANSI-S</th><td>Complied with ANSI C12.18 optical type two standard</td></tr>
						</tbody>
					</table>
					<h3>Features</h3>
					<ul>
						<li>Support a variety of micro power wireless communication mode</li>
						<li>Communication distance: 300M/max</li>
						<li>Radio frequency of 400MHz, 900MHz and 2.4GHz is available</li>
						<li>Duration of communication: about 24h provided by full battery energy</li>
						<li>LED indicator for the remaining energy</li>
						<li>LED indicator for the communication state</li>
					</ul>
			</td><td class="Right">
				<img src="images/products/product_TP-RF.jpg" alt="TP-HHU ">
			</td></tr>
		</table>
		<?php include("list_probes.php") ?>
	</div>
</div><!--End of content-->
<?php include("../includes/Google_ProbeAdsTracking.php") ?>
<?php include("footer.php") ?>