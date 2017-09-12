<?php 
	header( "HTTP/1.1 301 Moved Permanently" );
	header("Location: TP-IEC.php");
	
	$title = "TP-232-IEC电表读写光电头（RS232接口）";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
<div class="Products">
	<h1>TP-232-IEC电表读写光电头（RS232接口）</h1>
	<?php
		include("breadcrumnav.php");	
	?>
		<table class="TwoColsLayout">
			<tr><td class="Left">
				<p>TP-232 电表光电头是我公司设计并生产历史比较久远产品，2002年最早开创从RS232取电，免电池的光电读写头。</p>
				<h3>技术特点：</h3>
				<ul>
					<li>符合IEC1107和DL/T645通讯技术规范的规定，通讯波特率可达19200。</li>
					<li>TP-232是一种通用型读写头，可对兰吉尔、Elster、EDMI、爱托利，以及多种国产电能表的数据、参数读写。</li>
					<li>采用DB9插头和特殊的取电技术，彻底免除了以往需要附加电池供电的麻烦。</li>
				</ul>
				<h3>可选项：</h3>
				<ul>
					<li>光电头工具包和附件</li>
				</ul>
			</td><td class="Right">
				<img src="images/products/product_TP-232.jpg" alt="TP-232电表读写光电头" />
			</td></tr>
		</table>

	<?php include("list_probes.php") ?>
</div>
</div><!--End of content-->
<?php include("footer.php") ?>