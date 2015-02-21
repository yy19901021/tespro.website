<?php 
	$title = "TP-232 Optical Probe for Meter Communication";
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
					<p>Tespro designed TP-232 optical probe to be powered from interface RS232 in 2002, eliminating battery as power. With years’ optimization, Tespro TP-232 has been proven to be reliable in application. It is widely used in meter parameterization and data reading, to be an ideal device for both utilities and manufacturers.</p>
					<p>It works  with gas meter and thermal meter. </p>
			  </div>
			  <div class="col-md-4 col-sm-5">
			  	<img src="images/banners/reading-meter.png" class="pull-right" style="margin-top: 10px; width: 260px;" />
			  </div>
			</div>		
		</div>
	</div><!-- ./Jumbo Title -->
	<div class="container">
		<div class="row">
			<div class="col-md-8"><!-- Left Column -->
				<h3>Sub-models</h3>
				<ul>
					<li>TP-232-IEC</li>
					<li>TP-232-ANSI-N: Compatible with ANSI C12.18 (Normal Standard)</li>
					<li>TP-232-ANSI-S: Compatible with ANSI C12.18 type two, 2007(Sub-standard)</li>
					<li>TP-232-ANSI-U: Compatible with ANSI C12.18 (Universal, can be switch between N and S)</li>
				</ul>
				<h3>Specifications:</h3>
				<table id="SpecTable" class="table spec-table">
					<col class="title" span="1" />
					<col span="1" />
					<tbody class="table-striped">
						<tr>
							<th>Standard:</th>
							<td>
								<ul>
									<li>IEC 62056-21 standard</li>
									<li>ANSI C12.18-1996 & 2007 standard</li>
							</td>
						</tr>
						<tr>
							<th>Interface:</th><td>Infrared optical</td>
						</tr>
						<tr>
							<th>Connector:</th><td>232-DB9 connector</td>
						</tr>
						<tr>
							<th>Power:</th><td>From the 232 port, no battery required</td>
						</tr>
						<tr>
							<th>Maximum B.R.:</th><td>Up to 38400bps</td>
						</tr>
						<tr>
							<th>Fastening:</th><td>Strong magnetic adhesion complied with IEC62056-21 or ANSI C12.18</td>
						</tr>
						<tr>
							<th>Cable:</th><td>2 meters straight cable</td>
						</tr>
						<tr><th>Enviroment:</th><td>-15&deg;C ~ 80&deg;C (5&deg;F - 176&deg;F)</td></tr>
					</tbody>
				</table>
				<h3>Options</h3>
				<table id="OptionTable" class="table spec-table">
					<col class="title" span="1" />
					<col span="1" />
					<tbody class="table-striped">
						<tr><th>Extended Temp. Cable:</th><td>-35&deg;C ~ 80&deg;C (31&deg;F - 176&deg;F)<br />Spiral cable is available.</td></tr>
						<tr><th>Cable:</th><td>Extended length upon request.</td></tr>
					</tbody>
				</table>
			</div><!-- ./Left Column -->
			<div class="col-sm-4 right-column"><!-- Right Column -->
				<img src="images/products/product_TP-232.jpg" width="300" alt="TP-232-IEC " />
				<img src="images/products/product_TP-232-ANSI_demo.jpg" width="300" alt="TP-232 Optical Probe" />
			</div>
		</div>
	</div>
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("footer.php") ?> 
<?php include("../includes/Google_ProbeAdsTracking.php") ?>