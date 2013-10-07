<?php 
	$title = "TesPro: TG-MTSL Energy Meter Test Station";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
	<div class="Products">
		<h1>TG-MTSL Energy Meter Test Station</h1>
		<table class="TwoColsLayout">
			<tr><td class="Left">
				<p>TG-MTSL test station is a dedicated test device for Landis+Gyr polyphase energy meters. It is designed and has been used for ZB, ZD, ZH, FOX, ZQ meters.</p>
				<h3>Functions: </h3>
				<ul>
					<li>Free of wire-connection, instantly power on when the meter is put on the station.</li>
			        <li>Insulation material ensures safety, fine-looking and portable design.</li>
			        <li>Support 3p4w(58V×3, 220V×3), and 3p3w(phase to phase 100V) networks, controlled by switch.</li>
			        <li>Single phase power supply, all phases are connected in parallel, while the current in series.</li>
			        <li>Three-color LED indicates the voltage: Red(220V) , Blue(100V) , Green(58V), prevent misoperation on voltage.</li>
			        <li>Support +A/&minus;A test, controlled by switch.</li>
			        <li>Load current: ZD: 4/2A, FOX: 5.6A/2.8A , current change by H/L switch.
			            (For 3p3w network the current switch IB should be set to &quot;off&quot;.)</li>
			        <li>Support phase operation test: power on/off, current lost.</li>
			        <li>Total power capacity 15VA.</li>
			        <li>All voltage and current circuits are isolated from utility power lines, the insulation voltage is over 2500VAC, 1 minute(testing).</li>
				</ul>
				<h3>Applications:</h3>
				<ul>
					<li>Meter operation demonstration.</li>
			        <li>Quick connection for parameters download and inspection.</li>
			        <li>Meter functionality test, esp. anti-tamper function test and event log test.</li>
			        <li>Meter tariff operation test run.</li>
			        <li>Meter test-run in R&#38;D, customer service or training.</li>
			        <li>Quick connection and support device in production line.</li>
				</ul>
			</td><td class="Right">
				<img src="images/products/product_TG-MTSL.jpg" alt="TG-MTSL Energy Meter Test Station" />
				<img src="images/products/product_TG-MTSL_2.jpg" alt="TG-MTSL Energy Meter Test Station" />
			</td></tr>
		</table>
		
		<?php include("List_MeterTestStations.php") ?>
	</div>
</div><!--End of content-->
<?php include("footer.php") ?>