<?php 
	$title = "TP-BT Bluetooth Optical Probe";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="content"><!--Start of content-->
	<div id="" class="jumbo-title product-page-title"><!-- Jumbo Title -->
		<div class="PageTitleBrg container">
			<div id="tp-intro" class="row">
			  <div class="col-md-7 col-sm-7">
					<h1><?php echo $title ?></h1>
					<p>TP-BT is a new series of Tespro optical probe family. It works with all Bluetooth enabled devices.</p>
			  </div>
			  <div class="col-md-4 col-sm-5">
			  	<img src="images/banners/tp-bt.png" />
			  </div>
			</div>		
		</div>
	</div><!-- ./Jumbo Title -->
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<h3>Sub-models</h3>
				<ul>
					<li>TP-BT-IEC: Complied with IEC62056-21 standard</li>
					<li>TP-BT-ANSI-N: Complied with ANSI C12.18 standard</li>
					<li>TP-BT-ANSI-S: Complied with ANSI C12.18 optical type two standard</li>
				</ul>
				<h3>Specification</h3>
				<table id="SpecTable" class="table spec-table">
					<col class="Title" span="1" />
					<col span="1" />
					<tbody>
						<tr><th>Bluetooth: </td><td>Complied with 4.0/2.1</td></tr>
						<tr><th>Meter protocol: </td><td>Complied with IEC62056-21 or ANSI C12.18</td></tr>
						<tr><th>Distance: </td><td>10 Meters</td></tr>
						<tr><th>Battery: </td><td>Supports 24 hours operation when battery in full.</td></tr>
						<tr><th>Indicators: </td>
							<td>
								<ul>
									<li>LED red: Indicating battery in charging</li>
									<li>LED green: Indicating power on and the energy available in battery</li>
									<li>LED Blue: indicating communication state</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>Maximum B.R.:</th><td>Up to 38400bps</td>
						</tr>
						<tr>
							<th>Fastening:</th><td>Strong magnetic adhesion complied with IEC62056-21 or ANSI C12.18</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-sm-4 right-column">
				<img src="images/products/product_TP-BT.jpg" width="250" alt="TP-BT-IEC/ANSI Bluetooth Optical Probe ">
			</div>
		</div><!-- ./row -->
	</div><!-- ./container -->
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("footer.php") ?>
<?php include("../includes/Google_ProbeAdsTracking.php") ?>