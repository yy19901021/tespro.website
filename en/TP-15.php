<?php 
	$title = "TP-15 Dual-frequency optical scanning probe for accuracy test";
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
					<p>TP-15 is two-frequency switchable optical scanning probe for meter accuracy testing.
						<ul>
							<li>Frequencies of optical pulses and electric pulses keeps the same, this mode is for normal meter constant.</li>
							<li>The optical pulse is divided by 4 to electric pulse, this mode is designed for very high meter constant.</li>
						</ul>
					</p>
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
				
				<h3>Features:</h3>
				<table id="SpecTable" class="table spec-table">
					<col class="Title" span="1" />
					<col span="1" />
					<tr><td>Light sense: </td><td>TP-15 optical scanning probe can sense both light and IR(Infrared) light pulses emitted by LED, and then convert them to electric pulses.</td></tr>
					<tr><td>Switching: </td><td>The optical pulse can be switched by a press button, one LED indicating the frequency: green means1:1 and red 4:1.</td></tr>
					<tr><td>Power supply:	</td><td>DC 5V±10%</td></tr>
					<tr><td>Cable:	</td><td>Straight-line cable, 55cm in normal</td></tr>
					<tr><td>Fastening:	</td><td>Magnetic adhesion</td></tr>
					<tr><td>Connector:	</td><td>Optional item from <a href="en/TP1_option_table.php">Table of Connectors for Optical Scanning Probes</a>. </td></tr>
					<tr><td>Probe Fixture:	</td><td>TP-GS fixture can be used for probe fastening onto any type of meters.</td></tr>
				</table>
			</div>
			<div class="col-sm-4 right-column">
				<img src="images/products/product_TP-15.jpg" alt="TP-15 Dual-frequency optical scanning probe for accuracy test" />
			</div>
		</div><!-- ./row -->
	</div><!-- ./container -->
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("footer.php") ?>
<?php include("../includes/Google_ProbeAdsTracking.php") ?>