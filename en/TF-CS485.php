<?php 
	$title = "TF-CS485 Converter";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
	<div class="Products">
		<h1>TF-CS485 Converter</h1>
		<?php
			include("breadcrumnav.php");	
		?>
		<p><img src="images/product_TP-CS485.jpg" alt="TF-CS485 Converter">TF-CS485 converter has been put into market for many years, two versions available:</p>
		<h3>TP-CS485A (PCB model)</h3>
		<ul>
			<li>Simple PCB structure</li>
			<li>Power supply from outside by 12VDC，40mA</li>
			<li>CS current: 15－20mA</li>
			<li>Circuitry insulate by photo-coupler, insulating voltage : 2500Vrms</li>
			<li>Outlet-line is available if needed</li>
		</ul>
		<h3>TF-CS485B (BOX model)</h3>
		<ul>
			<li>Structure with plastic box, which can be fixed on the top of the meter or any where. </li>
			<li>Other features are the same as above </li>
		</ul>
		<p>Option: AC/DC (12V)switching power regulator is available</p>
		<?php include("List_CommunicationConverters.php") ?>
	</div>
</div><!--End of content-->
<?php include("footer.php") ?>