<?php 
	$title = "TP-11 Optical Scanning Probe for Test-bench Assembled";
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
					<p>Assembled to meter test bench for accuracy testing.</p>
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
				<h3>Specifications</h3>
				<table id="SpecTable" class="table spec-table">
					<col class="Title" span="1" />
					<col span="1" />
					<tr><td>Light sense:</td><td>Sense both light and IR(Infrared) light pulses emitted by LED, and then convert them to electric pulses.</td>
					<tr>
						<td>Power supply: </td><td>DC 5V±10%</td>
					</tr>
					<tr>
						<td>Outlet cable: </td><td>Straight-line cable, 55cm</td>
					</tr>
					<tr>
						<td>Fastening:</td><td>Magnetic adhesion</td>
					</tr>
					<tr>
						<td>Mechanical:</td><td>Impact ABS housing</td>
					</tr>
					<tr>
						<td>Probe Fixture:</td><td>TP-GS fixture can be used for probe fixing onto any kind of meters</td>
					</tr>
					<tr><td>Connector:</td><td>Optional item from <a href="en/TP1_option_table.php">Table of Connectors for Optical Scanning Probes</a></td>
				</table>
			</div>
			<div class="col-sm-4 right-column">
				<img src="images/products/product_TP-11.jpg" alt="TP-11 Optical Scanning Probe for Test-bench Assembled" />
			</div>
		</div><!-- ./row -->
	</div><!-- ./container -->
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("footer.php") ?>
<?php include("../includes/Google_ProbeAdsTracking.php") ?>