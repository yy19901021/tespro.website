<?php 
	header( "HTTP/1.1 301 Moved Permanently" );
	header('Location: TP-16.php');

	$title = "TesPro: TP16-PRS Optical Scanning Probe for Portable Test Instrument";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
	<div class="Products">
		<h1>TP16-PRS Optical Scanning Probe for Portable Test Instrument</h1>
		<p><img src="images/product_TP15.jpg" alt="TP16-PRS Optical Scanning Probe ">TP16 is A new product special designed for portable test instrument.</p>
		<h3>Features:</h3>
		<table class="NarrowList">
			<col class="Title" span="1">
			<col span="1">
			<tr>
				<td>Power:</td>
				<td>DC12-24V</td>
			</tr>
			<tr>
				<td>Light sense:</td>
				<td>TP16-PRS can sense both light and IR(Infrared) light pulses emitted by LED, then convert them to electric pulses. </td>
			</tr>
			<tr>
				<td>Output pulses:</td>
				<td>1:1, electric pulses keeps the same as the optical ones.<br />
					1:4, electric pulses is divided by 4 of the optical ones.
				</td>
			</tr>
		</table>
		<table class="List">
			<col class="Title" span="1">
			<col span="1">
			<tr>
				<td>Output pulse:</td>
				<td>High level ≥4.0V， low level ≤0.3V，positive electric pulse</td>
			</tr>
			<tr>
				<td>Outlet cable:</td>
				<td>Straight line of 2-3M long.</td>
			</tr>
			<tr>
				<td>Fastening:</td>
				<td>Magnetic adhesion.</td>
			</tr>
			<tr>
				<td>Mechanical:</td>
				<td>Impact ABS housing.</td>
			</tr>
		</table>
		<h3>Options:</h3>
		<table class="List">
			<col class="Title" span="1">
			<col span="1">
			<tr>
				<td>Active Supporter:</td>
				<td><a href="en/TP-GS07.php">TP-GS07 Probe Active Supporter</a> provides magnetic adhesion for TP16-PRS to all kinds of meter.</td>
			</tr>
			<tr>
				<td>Probe plugs:</td>
				<td>Any kind of plugs are available, refer to <a href="en/TP1_option_table.php">Table of Plugs for Optical Scanning Probes</a>.  Also any special plugs out of the table are possible when ordered.</td>
			</tr>
		</table>
		<?php include("list_probes.php") ?>
	</div>
</div><!--End of content-->
<?php include("../includes/Google_ProbeAdsTracking.php") ?>
<?php include("footer.php") ?>