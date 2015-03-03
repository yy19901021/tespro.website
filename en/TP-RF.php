<?php 
	$title = "TP-RF Wireless Optical Probe with RF Interface ";
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
					<p>It is a new series of Tespro optical probe family, supporting RF wireless communication for meter reading in case cable connection un-reachable. Communication distance is much longer than Bluetooth. </p>
			  </div>
			  <div class="col-md-4 col-sm-5">
			  	<img src="images/banners/tp-rf.png" />
			  </div>
			</div>		
		</div>
	</div><!-- ./Jumbo Title -->
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<h3>Sub-models</h3>
				<ul>
					<li>TP-RF-IEC:      Compliant with IEC 62056-21 standard</li>
					<li>TP-RF-ANSI-N:	Complied with ANSI C12.18 standard</li>
					<li>TP-RF-ANSI-S:	Complied with ANSI C12.18 optical type two standard</li>
				</ul>
				<h3>Features</h3>
				<ul>
					<li>Support a variety of micro power wireless communication mode</li>
				</ul>
				<h3>Specifications</h3>
				<table id="ModelTable" class="table spec-table">
					<col class="Title" span="1" />
					<col span="1" />
					<tbody>
						<tr><th>Max	com-distance: </th><td>100 meters</td></tr>
						<tr><th>Radio frequency: </th><td>400MHz/900MHz/2.4GHz available</td></tr>
						<tr><th>Battery life: </th><td>Up to 24 hours when battery in full</td></tr>
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
				<img src="images/products/product_TP-RF.jpg" width="350" alt="TP-RF ">
			</div>
		</div><!-- ./row -->
	</div><!-- ./container -->
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("footer.php") ?>
<?php include("../includes/Google_ProbeAdsTracking.php") ?>