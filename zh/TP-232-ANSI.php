<?php 
	header( "HTTP/1.1 301 Moved Permanently" );
	header("Location: TP-ANSI.php");
	
	$title = "TP-232-ANSI电表读写光电头（RS232接口）";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
<div class="Products">
	<h1>TP-232-ANSI电表读写光电头（RS232接口）</h1>
	<?php
		include("breadcrumnav.php");	
	?>
		<table class="TwoColsLayout">
			<tr><td class="Left">
				<p>TP-232-ANSI 电表光电头是我公司设计并生产历史比较久远产品，2002年最早开创从RS232取电，免电池的光电读写头。</p>
				<h3>子型号：</h3>
				<table id="ModelTable" class="List">
					<col class="Title" span="1" />
					<col span="1" />
					<tbody>
						<tr><th>TP-232-ANSI-N</th><td>符合ANSI C12.18-1996标准电表。</td></tr>
						<tr><th>TP-232-ANSI-S</th><td>符合ANSI C12.18-1996标准，用于西门子和EDMI电表。</td></tr>
						<tr><th>TP-232-ANSI-U</th><td>符合ANSI C12.18-1996标准，可用于所有ANSI标准。</td></tr>
					</tbody>
				</table>
				<h3>技术特点：</h3>
				<ul>
					<li>通讯波特率可达19200。</li>
					<li>采用DB9插头和特殊的取电技术，彻底免除了以往需要附加电池供电的麻烦。</li>
				</ul>
				<h3>可选项：</h3>
			</td><td class="Right">
				<img src="images/products/product_TP-232-ANSI.jpg" alt="TP-232电表读写光电头" />
			</td></tr>
		</table>

	<?php include("list_probes.php") ?>
</div>
</div><!--End of content-->
<?php include("footer.php") ?>