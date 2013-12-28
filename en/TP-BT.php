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
					<p>TP-BT is a new series of Tespro optical probe family, which supports Bluetooth communications with PC, NB, PDA and other devices.</p>
					<h3>Models</h3>
					<table id="ModelTable" class="List">
						<col class="Title" span="1" />
						<col span="1" />
						<tbody>
							<tr><th>TP-BT-IEC</th><td>for Landtech HHU, such as 2680/2900/M73 PDA</td></tr>
							<tr><th>TP-BT-ANSI-N</th><td>Complied with ANSI C12.18 standard</td></tr>
							<tr><th>TP-BT-ANSI-S</th><td>Complied with ANSI C12.18 optical type two standard</td></tr>
						</tbody>
					</table>
					<h3>Features</h3>
					<ul>
						<li>Complied with Bluetooth standard V2.1</li>
						<li>Max distance for communication: 10M</li>
						<li>Duration of communication: about 24h provided by full battery energy </li>
						<li>LED indicator for the remaining energy</li>
						<li>LED indicator for the communication state</li>
					</ul>
			</td><td class="Right">
				<img src="images/products/product_TP-BT.jpg" alt="TP-BT-IEC/ANSI Bluetooth Optical Probe ">
			</td></tr>
		</table>
		<?php include("list_probes.php") ?>
	</div>
</div><!--End of content-->
<?php include("../includes/Google_ProbeAdsTracking.php") ?>
<?php include("footer.php") ?>