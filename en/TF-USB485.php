<?php 
	$title = "TF-USB485 Converter";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
	<div class="Products">
		<h1>TF-USB485 Converter</h1>
		<?php
			include("breadcrumnav.php");	
		?>
		<p><img src="images/product_TF-USB485.jpg" alt="TF-USB485 Converter Integrated"></p>
		<h3>Features:</h3>
		<ul>
			<li>Interface converter from USB to  RS485 communication.</li>
			<li>Integrative design, make the USB plug, converter circuit, 3-pin test wires into a integrated one. This lead to very convenience in use.</li>
			<li>Conform USB 2.0 standard,USB  CD-ROM driver by free.</li>
		</ul>
		<h3>Applications:</h3>
		<p>On-site service, laboratory, or customer service, or anywhere RS485 communication via USB port is needed.</p>
		<h3>Definition:</h3>
		<table>
			<thead>
			<tr>
				<td>Item</td>
				<td colspan="3">Definition of the RS232-pin</td>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Pin-color</td>
				<td>Blue</td>
				<td>White</td>
				<td>Black</td>
			</tr>
			<tr>
				<td>Pin-definition</td>
				<td>485 A+</td>
				<td>485 B-</td>
				<td>GND</td>
			</tr>
			</tbody>
		</table>
		<?php include("List_CommunicationConverters.php") ?>
	</div>
</div><!--End of content-->
<?php include("footer.php") ?>