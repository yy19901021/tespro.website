<?php 
	$title = "TP-PDA Optical Probe for Hand Held Devices";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
	<div class="Products">
		<h1><?php echo $title ?></h1>
		<?php
			include("breadcrumnav.php");	
		?>					
		<table class="TwoColsLayout">
			<tr><td class="Left">
					<p>TP-PDA is design to work with a wide range popular hand-held devices. 
						With 9 years of history, it's been developed to support more devices, 
						and widely used in on-site meter reading.</p>
					<h3>Models</h3>
					<table id="ModelTable" class="List">
						<col class="Title" span="1" />
						<col span="1" />
						<tbody>
							<tr><th>TP-PDA-IEC-D9700 </th><td>for Dophin 9700</td></tr>
							<tr><th>TP-PDA-IEC-MC75 </th><td>for Motorola MC75xx</td></tr>
							<tr><th>TP-PDA-IEC-T </th><td>for Tespro TA-262</td></tr>
							<tr><th>TP-HTTP  </th><td>for Zhenzhong HHU Model 900</td></tr>
							<tr><th>TP-HTTJ</th><td>for JieBao HHU Model 9800/A188</td></tr>
						</tbody>
					</table>
					<h3>Specifications:</h3>
					<table id="SpecTable" class="List">
						<col class="Title" span="1">
						<col span="1">
						<tr><td>Connector: </td><td>With specific connector compatible with PDA terminal.</td></tr>
						<tr><td>Powered: </td><td>From PDA terminal port</td></tr>
						<tr><td>Cable: </td><td>1.5m</td></tr>
						<tr><td>Environment: </td><td>Operating temperature: -15℃~80℃ (5°F ~ 176°F) </td></tr>
					</table>
			</td><td class="Right">
				<img src="images/products/product_TP-Handheld.jpg" alt="TP-HHU/PDA Optical Probe">
			</td></tr>
		</table>
	</div>
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("../includes/Google_ProbeAdsTracking.php") ?>
<?php include("footer.php") ?>