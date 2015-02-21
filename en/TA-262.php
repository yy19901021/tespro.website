<?php 
	$title = "TA-262 Meter Communication Tester";
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
					<p>In Automatic Meter Reading (AMR) applications, if the readout operation cannot be finished properly, it is always a challenge to diagnose the root cause. Does the problem come from the interface or the communication cable？ By using our patented TA-262 Meter Communication Port Tester an operator can test the com-port of a meter easily and quickly, then the problem can be immediately determined. Please see the detailed introduction of TA-262. </p>
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
				<h3>Applications</h3>
				<ul>
					<li>The TA-262 tester can be used for communication port functionality test.</li>
					<li>Communication address/device ID detection.</li>
					<li>Baud rate detection.</li>
					<li>Widely used in on-site and laboratory test.</li>
				</ul>
				<h3>Main Features</h3>
				<ul>
					<li>Supported meter port: RS485, RS232, CS, infrared(IR) interfaces.</li>
					<li>Supported Protocols: IEC 62056-21(1107), dlms, IEC 60870-5-102, DL/T645, EDMI-MK6, Elster-Alpha, etc..<br />
					</li>
					<li>Baud Rate: 300-19200bps; Supports meter baud-rate automatic detection.</li>
					<li>Test Report: The test results can be saved as a test report if needed.</li>
				</ul>
				<p class="HighLight">English Version of Program TATESTxx is available upon order.</p>
				<p class="HighLight">TA-261 is originally designed and manufactured by Tespro Electronics Co., Ltd.</p>
			</div><!-- ./Left Column -->
			<div class="col-sm-4 right-column"><!-- Right Column -->
				<img src="images/products/product_TA-262.jpg" alt="TA-262 Communication Port Tester" />
				<img src="images/products/product_TA-262_zh.png" alt="TA-262 Communication Port Tester" />
			</div>
		</div>
	</div>
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("footer.php") ?> 
<?php include("../includes/Google_ProbeAdsTracking.php") ?>