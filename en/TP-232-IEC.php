<?php 
	header( "HTTP/1.1 301 Moved Permanently" );
	header("Location: TP-232.php");

	$title = "TP-232-IEC Optical Probe for Meter Communication";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div class="Shadow1"></div>
<div class="Shadow2"></div>
<div class="Shadow3"></div>
<div id="Content"><!--Start of content-->
	<div class="Products">
		<h1>TP-232-IEC Optical Probe for Meter Communication</h1>
		<table class="TwoColsLayout">
			<tr><td class="Left">
				<p>TP-232-IEC is an optical probe with infrared and RS232 interfaces. It's widely applied to meter communication, such as data reading, parameterization, in production line, on-site service and more.</p>
				<p>In 2002 it was originally designed to be powered from RS-232 interface by Tespro, since then no battery required for its operation.</p>
				
				<h3>Specifications</h3>
				<table id="SpecTable" class="List">
					<col class="Title" span="1" />
					<col span="1" />
					<tbody>
					<tr><th>Standard:</th><td>Fully compatible with IEC 62056-21 standard, support dlms access.</td></tr>
					<tr><th>Signal Levels:</th><td>Compatible with EIA-232.</td></tr>
					<tr><th>Interface:</th><td>With infrared optical.</td></tr>
					<tr><th>Maximum B.R.:</th><td>Up to 38400bps.</td></tr>
					<tr><th>Fastening:</th><td>Strong magnetic adhesion ( specified by IEC 62056-21 ).</td></tr>
					<tr><th>Connector:</th><td>DB9 9-pin female connector.</td></tr>
					<tr><th>Mechanical:</th><td>Impact ABS housing.</td></tr>
					<tr><th>Power Supply:</th><td>From RS-232 interface, no battery required.</td></tr>
					<tr><th>Outlet Cable:</th><td>2 meters straight cable</td></tr>
					<tr><th>Enviroment:</th><td>-15&deg;C ~ 80&deg;C (5&deg;F - 176&deg;F)</td></tr>
					<tr><th>Color:</th><td>Black</td></tr>
					</tbody>
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
			</td><td class="Right">
				<img src="images/products/product_TP-232.jpg" alt="TP-232-IEC Optical Probe" />
			</td></tr>
		</table>
		
		<?php include("list_probes.php") ?>
	</div>
</div><!--End of content-->
<?php include("footer.php") ?> 
<?php include("../includes/Google_ProbeAdsTracking.php") ?>