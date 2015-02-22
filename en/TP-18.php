<?php 
	$title = "TP-18 Active/Reactive paired Optical Scanning Probes";
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
					<p>TP-18 Active/Reactive Paired Optical Probe was designed for meter active and reactive accuracy testing at the same time.</p>
			  </div>
			  <div class="col-md-4 col-sm-5">
			  	<img src="images/banners/reading-meter.png" />
			  </div>
			</div>		
		</div>
	</div><!-- ./Jumbo Title -->
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<h3>Features:</h3>
				<ul>
					<li>Can be used when active/reactive pulse sources in a short distance of 10mm.</li>
					<li>High optical sensitivity.</li>
					<li>Can be used to sense Active/Reactive-pulse-sources for calibrating A/R energy at the same time.</li>
					<li>To shield background light better. </li>
				</ul>
				<h3>Technical Specifications:</h3>
					<table id="SpecTable" class="table spec-table">
					<col class="Title" span="1" />
					<col span="1" />
					<tbody>
					<tr><th>Power supply:</th><td>5V-12V DC.</td></tr>
					<tr><th>Connector:</th><td>Optional item from <a href="en/TP1_option_table.php">Sample List of Connectors for Scanning Probes</a></td></tr>
					</tbody>
				</table>
				<p>Note: <a href="en/TP-GS.php">TP-GS</a> Fixture must be used for probes adhesion onto meters.</p>
			</div>
			<div class="col-sm-4 right-column">
				<img src="images/products/product_TP-18.jpg" alt="Slim Optical Scanning Probe" />
			</div>
		</div><!-- ./row -->
	</div><!-- ./container -->
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("footer.php") ?> 
<?php include("../includes/Google_ProbeAdsTracking.php") ?>