<?php 
	$title = "TD-6301 Three-phase Sinusoidal Power Source";
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
					<p>TD-6301 is a three-phase programmable sinusoidal power source, designed based on MCU digital control inverter and analog electronic technologies. It is specifically for power energy meter accuracy test, and programmable control test applications. </p>
			  </div>
			  <div class="col-md-4 col-sm-5">
			  	<!-- <img src="images/banners/tp-usb.png" alt="..."> -->
			  </div>
			</div>		
		</div>
	</div><!-- ./Jumbo Title -->

	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<h3>Applications</h3>
				<ul>
					<li>For electric energy meter functional and accuracy test.</li>
					<li>Can be used in laboratory for R&D and meter maintenance service.</li>
					<li>For integrated Meter Test Platform as a programmable power source.</li>
				</ul>
				<h3>Features</h3>
				<ul>
					<li>Single-phase input and three-phase output, generating three phase pure sinusoidal power.</li>
					<li>Enough monitoring measures providing safe operation.</li> 
					<li>Independent three phase voltages and currents.</li>
					<li>Parameters can be set via front key board, or by programmable control via its RS-232 port.</li>
				</ul>
				<h3>Specifications:</h3>
				<table class="table spec-table">
					<col class="title" span="1" />
					<col span="1" />
					<tbody class="table-striped">
						<tr><th>	Parameters	</th><td>	Effective value (AC)	</td><td>	Notes	</td></tr>
						<tr><th>	Voltage/phase	</th><td>	3x30V ～ 3x280V 100VA/per phase (max)	</td><td>	adjustment fineness: 0.01%	</td></tr>
						<tr><th>	Current/phase	</th><td>	"0.01A～100A (120A max) 200VA/per phase (max.)"	</td><td>	adjustment fineness: 0.01%	</td></tr>
						<tr><th>	Phase shift range 	</th><td>	0-360°	</td><td>	adjustment fineness: 0.1°	</td></tr>
						<tr><th>	Frequency	</th><td>	45Hz～65Hz	</td><td>	adjustment fineness:  0.01 Hz	</td></tr>
						<tr><th>	Output waveform 	</th><td>	Sinusoidal 	</td><td>	distortion: voltage ＜1% 	</td></tr>
						<tr><th>	Output with harmonics 	</th><td>	3-21 odd harmonics available	</td><td>	Total harmonics ＜40%	</td></tr>
						<tr><th>	Output stability index	</th><td>	＜ ±0.05%	</td><td>		</td></tr>
						<tr><th>	Load characteristic 	</th><td>	Resistive or inductive	</td><td>		</td></tr>
						<tr><th>	Power supply	</th><td>	220V ±10%,50Hz/60Hz	</td><td>		</td></tr>
						<tr><th>	Power consumption	</th><td>	700VA/max	</td><td>		</td></tr>
						<tr><th>	Dimension	</th><td>	480mm*200mm* 550mm	</td><td>	19-inch rack/ 4U	</td></tr>
						<tr><th>	Weight 	</th><td>	＜30kg	</td><td>	Cables not included 	</td></tr>
						<tr><th>	Accessories	</th><td>	Cables for voltage/current	</td><td>	3 colors(R/G/Y), 10*1.2m 	</td></tr>
					</tbody>
				</table>
			</div>
			<div class="col-sm-4 right-column"><!-- Right Column -->
				<!-- <img src="images/products/product_TP-USB.jpg" alt="TP-USB USB接口电表光电头" /> -->
				<img src="images/products/product_TD-6301.jpg" alt="TP-USB USB接口电表光电头" />
				<br /><br /><br /><br />
				<!-- <img src="images/products/product_TP-USB_demo2.jpg" alt="TP-USB 光电头应用与热能表" /> -->
			</div> 
		</div>
	</div>
</div><!--End of content-->
<?php include("list_power-station.php") ?>
<?php include("footer.php") ?> 
<?php include("../includes/Google_ProbeAdsTracking.php") ?>