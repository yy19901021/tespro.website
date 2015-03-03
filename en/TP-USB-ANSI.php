<?php 
	header( "HTTP/1.1 301 Moved Permanently" );
	header("Location: TP-USB.php");
	
	$title = "TesPro: TP-USB-ANSI Optical Probe for Meter Communication";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
	<div class="Products">
		<h1>TP-USB-ANSI Optical Probe for Meter Communication</h1>
		<table class="TwoColsLayout">
			<tr><td class="Left">
				<p>TP-USB-ANSI optical is an optical probe with USB interface, widely applied to meter communication, such as data reading, parameterization, in production line, on-site service. </p>
				<h3>Sub-models</h3>
				<table id="ModelTable" class="List">
					<col class="Title" span="1" />
					<col span="1" />
					<tbody>
						<tr><th>TP-USB-ANSI-N</th><td>ANSI C12.18 (-Normal type)</td></tr>
						<tr><th>TP-USB-ANSI-S</th><td>ANSI C12.18 type two (-Siemens type)</td></tr>
						<tr><th>TP-USB-ANSI-U</th><td>ANSI (-Universal type, controllable for both “N” and “S” types)</td></tr>
					</tbody>
				</table>
				<h3>Specifications:</h3>
				<table id="SpecTable" class="List">
					<col class="Title" span="1" />
					<col span="1" />
					<tr>
						<th>Standard:</th><td>Fully Compatible with ANSI C12.18-1996 standard.<br />Complied with USB 2.0 standards.</td>
					</tr>
					<tr>
						<th>Interface:</th><td>With infrared optical.</td>
					</tr>
					<tr>
						<th>Maximum B.R.:</th><td>Up to 38400bps.</td>
					</tr>
					<tr>
						<th>Fastening:</th><td>Strong magnetic adhesion ( specified by ANSI C12.18-1996 ).</td>
					</tr>
					<tr>
						<th>Driver:</th><td>USB driver (CD-ROM) available.</td>
					</tr>
					<tr>
						<th>Out Lead:</th><td>2 meters straight cable</td>
					</tr>
					<tr><th>Enviroment:</th><td>-15&deg;C ~ 80&deg;C (5&deg;F - 176&deg;F)</td></tr>
					<tr>
						<th>Color:</th><td>Black</td>
					</tr>
				</table>
				<h3>Options</h3>
				<table id="OptionTable" class="List">
					<col class="Title" span="1" />
					<col span="1" />
					<tbody>
					<tr><th>Outlet Cable:</th><td>3 meters straight cable.</td></tr>
					<tr><th>Extended Temperature:</th><td>-35&deg;C ~ 80&deg;C (-31&deg;F - 176&deg;F)</td></tr>
					<tr><th>Color:</th><td>Grey or bluish-grey.</td></tr>
					</tbody>
				</table>
				<h3>Drivers</h3>
				<a href="en/download/TP-USB.zip">USB driver supports all versions of Windows</a>

			</td><td class="Right">
				<img src="images/products/product_TP-ANSI-2.jpg" alt="TP-USB-ANSI Optical Probe" />
				<img src="images/products/product_TP-ANSI-3.jpg" alt="TP-USB-ANSI Optical Probe" />
			</td></tr>
		</table>
		
		<?php include("list_probes.php") ?>
	</div>
</div><!--End of content-->
<?php include("footer.php") ?> 
<?php include("../includes/Google_ProbeAdsTracking.php") ?>