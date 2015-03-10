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
					<p>TP-PDA is a series of probes designed with special connectors, able to work with all popular hand-held digital devices. It is widely used in the on-site meter reading.</p>
			  </div>
			  <div class="col-md-4 col-sm-5">
			  	<img src="images/banners/tp-pda.png" />
			  </div>
			</div>		
		</div>
	</div><!-- ./Jumbo Title -->
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
					<h3>Sub-models</h3>
					<table id="tp-pda-model-list" class="table model-table">
						<col class="Title" span="1" />
						<col span="1" />
						<tbody>
							<tr><th>TP-PDA-IEC-DP97</th><td>    for Dolphin 9700</td></tr>
							<tr><th>TP-PDA-ANSI-DP97</th><td> for Dolphin 9700</td></tr>
							<tr><th>TP-PDA-IEC-MC75</th><td>   for Motorola MC75xx</td></tr>
							<tr><th>TP-PDA-ANSI-MC75</th><td>for Motorola MC75xx</td></tr>
							<tr><th>TP-PDA-IEC-iPad</th><td>      for Apple iPad</td></tr>
							<tr><th>TP-PDA-IEC-T</th><td>           for Tespro TA-262, IEC standard</td></tr>
							<tr><th>TP-PDA-IEC-645</th><td>       for Tespro TA-262, DLT/645 standard</td></tr>
							<tr><th>TP-PDA-IEC-HTTP</th><td>    for Zhenzhong HHU Model 900</td></tr>
							<tr><th>TP-PDA-IEC-HTTJ</th><td>for JieBao HHU Model 9800/A188</td></tr>
						</tbody>
					</table>
					<h3>Specifications</h3>
					<table id="SpecTable" class="table spec-table">
						<col class="Title" span="1">
						<col span="1">
						<tr><th>Connector: </th><td>With specific connector compatible with PDA terminal.</td></tr>
						<tr><th>Powered: </th><td>From PDA terminal port</td></tr>
						<tr><th>Cable: </th><td>1.5m</td></tr>
						<tr><th>Environment: </th><td>Operating temperature: -15℃~80℃ (5°F ~ 176°F) </td></tr>
						<tr>
							<th>Maximum B.R.:</th><td>Up to 38400bps</td>
						</tr>
						<tr>
							<th>Fastening:</th><td>Strong magnetic adhesion complied with IEC62056-21 or ANSI C12.18</td>
						</tr>
					</table>

					<h3>Option</h3>
					<p>On customized orders compliant with specific PDA welcome.</p>
			</div>
			<div class="col-sm-4 right-column">
				<!-- <img src="images/products/product_TP-PDA.jpg" alt="TP-HHU/PDA Optical Probe"> -->
			</div>
		</div><!-- ./row -->
	</div><!-- ./container -->
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("footer.php") ?>
<?php include("../includes/Google_ProbeAdsTracking.php") ?>