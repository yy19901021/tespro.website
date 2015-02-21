<?php 
	$title = "TP-USB Optical Probe for Meter Communication";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="content"><!--Start of content-->
	<div class="container">
		<div id="product-carousel" class="product carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#product-carousel" data-slide-to="0" class="active"></li>
		    <li data-target="#product-carousel" data-slide-to="1"></li>
		    <li data-target="#product-carousel" data-slide-to="2"></li>
		  </ol>
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			   <div class="item active">
		      <img src="images/banners/tp-usb-01.jpg" alt="...">
		      <div class="carousel-caption">
		        <h1><?php echo $title ?></h1>
		      </div>
		    </div>
		    <div class="item">
		      <img src="images/banners/tp-usb-01.jpg" alt="...">
		      <div class="carousel-caption">
		        <h1><?php echo $title ?></h1>
		      </div>
		    </div>
		    <div class="item">
		      <img src="images/banners/tp-usb-01.jpg" alt="...">
		      <div class="carousel-caption">
		        <h1><?php echo $title ?></h1>
		      </div>
		    </div>
		  </div>
		  <!-- Controls -->
		  <a class="left carousel-control" href="#product-carousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#product-carousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>Applications</h3>
				<p>TP-USB optical probe is designed by Tespro in 2005 and got patented. With years of optimization, it's been proved to be reliable in application. It is widely used in electric energy meter parameterization and data reading, proved to be an ideal device for both utilities and manufacturers.</p>
				<p>It works  with gas meter and thermal meter. </p>
				<h3>Sub-models</h3>
				<ul>
					<li>TP-USB-IEC</li>
					<li>TP-USB-ANSI-N: Compatible with ANSI C12.18 (Normal Standard)</li>
					<li>TP-USB-ANSI-S: Compatible with ANSI C12.18 type two, 2007(Sub-standard)</li>
					<li>TP-USB-ANSI-U: Compatible with ANSI C12.18 (Universal, can be switch between N and S)</li>
				</ul>
				<h3>Specifications:</h3>
				<table class="table spec-table">
					<col class="title" span="1" />
					<col span="1" />
					<tbody class="table-striped">
						<tr>
							<th>Standard:</th>
							<td>
								<ul>
									<li>IEC 62056-21 standard.</li>
									<li>ANSI C12.18-1996 & ANSI C12.18 type two-2007 standard</li>
							</td>
						</tr>
						<tr>
							<th>Interface:</th><td>Infrared optical</td>
						</tr>
						<tr>
							<th>Connector:</th><td>USB connector with USB 2.0 standard</td>
						</tr>
						<tr>
							<th>Maximum B.R.:</th><td>Up to 38400bps</td>
						</tr>
						<tr>
							<th>Fastening:</th><td>Strong magnetic adhesion complied with IEC62056-21 or ANSI C12.18</td>
						</tr>
						<tr>
							<th>Computer compatibility:</th><td>Windows 2000, Windows XP, Windows Vista, Windows 7, Windows 8</td>
						</tr>
						<tr>
							<th>Cable:</th><td>2 meters (6.5 feet) straight cable.</td>
						</tr>
						<tr><th>Enviroment:</th><td>-15&deg;C ~ 80&deg;C (5&deg;F - 176&deg;F)</td></tr>
					</tbody>
				</table>
				<h3>Options</h3>
				<table class="table spec-table">
					<col class="title" span="1" />
					<col span="1" />
					<tbody>
					<tr><th>Extended Temp. Cable:</th><td>-35&deg;C ~ 80&deg;C (31&deg;F - 176&deg;F)<br />Spiral cable is available.</td></tr>
					<tr><th>Cable:</th><td>Extended length upon request.</td></tr>
					</tbody>
				</table>
				<h3>Drivers</h3>
				<a class="btn btn-success btn-lg" href="en/download/TP-USB.zip">Download the USB driver for Windows</a>
			</div>
		</div>
	</div>
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("footer.php") ?> 
<?php include("../includes/Google_ProbeAdsTracking.php") ?>