<?php 
	$title = "TP-PDA Optical Probe for Hand Held Devices";
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
					<p>TP-PDA is a series of probes designed with special connectors, able to work with all popular hand-held digital devices. It is widely used in on-site meter reading.</p>
			  </div>
			  <div class="col-md-4 col-sm-5">
			  	<img src="images/banners/reading-meter.png" class="pull-right" style="margin-top: 10px; width: 260px;" />
			  </div>
			</div>		
		</div>
	</div><!-- ./Jumbo Title -->
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
					<h3>Models</h3>
					<table id="ModelTable" class="table spec-table">
						<col class="Title" span="1" />
						<col span="1" />
						<tbody>
							<tr><th>TP-PDA-IEC-D9700 </th><td>for Dophin 9700</td></tr>
							<tr><th>TP-PDA-IEC-MC75 </th><td>for Motorola MC75xx</td></tr>
							<tr><th>TP-PDA-IEC-T </th><td>for Tespro TA-262</td></tr>
							<tr><th>TP-HTTP  </th><td>for Zhenzhong HHU Model 900</td></tr>
							<tr><th>TP-HTTJ</th><td>for JieBao HHU Model 9800/A188</td></tr>
							<tr><th>TP-PDA-ANSI-D9700</th><td></td></tr>
							<tr><th>TP-PDA-IEC-MC75xx</th><td></td></tr>
							<tr><th>TP-PDA-IEC-iPad</th><td></td></tr>
						</tbody>
					</table>
					<h3>Specifications:</h3>
					<table id="SpecTable" class="List">
						<col class="Title" span="1">
						<col span="1">
						<tr><td>Connector: </td><td>With specific connector compatible with PDA terminal.</td></tr>
						<tr><td>Powered: </td><td>From PDA terminal port</td></tr>
						<tr><td>Cable: </td><td>1.5m</td></tr>
						<tr><td>Environment: </td><td>Operating temperature: -15℃~80℃ (5°F ~ 176°F) </td></tr>
						<tr>
							<th>Maximum B.R.:</th><td>Up to 38400bps</td>
						</tr>
						<tr>
							<th>Fastening:</th><td>Strong magnetic adhesion complied with IEC62056-21 or ANSI C12.18</td>
						</tr>
					</table>
			</div>
			<div class="col-sm-4 right-column">
				<img src="images/products/product_TP-PDA.jpg" alt="TP-HHU/PDA Optical Probe">
			</div>
		</div><!-- ./row -->
	</div><!-- ./container -->
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("footer.php") ?>
<?php include("../includes/Google_ProbeAdsTracking.php") ?>