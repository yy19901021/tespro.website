<?php 
	header( "HTTP/1.1 301 Moved Permanently" );
	header("Location: TP-Handheld.php");
	
	$title = "泰易电子：TP-HHTJ 捷宝型手抄器光电头";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
<div class="Products">
	<h1>TP-HHTJ 捷宝型手抄器光电头</h1>
		<table class="TwoColsLayout">
			<tr><td class="Left">
				<p>TP-HHTJ型光电头是特地为捷宝9800型掌上电脑配套设计的专用产品。</p>
				<h3>TP-HHTJ技术特点：</h3>
				<ul>
					<li>通讯波特率可达300－19200bps。</li>
					<li>采用捷宝掌上电脑接口和插头标准，以RS232串行通信标准连接光电头。抗干扰能力强，数据传输稳定可靠。</li>
					<li>TP-HHTJ是一种通用型读写头，可对兰吉尔、ABB、EDMI、爱托利，以及多种国产电能表的数据、参数读写。</li>
					<li>采用柔软的高档塑料引出线，标准长度：150cm。</li>
				</ul>
				<h3>可选件：</h3>
				<ul>
					<li>光电头专用工具包</li>
					<li>光电头界面保护盖</li>
					<li>引出线长度可选</li>
				</ul>
			</td><td class="Right">
				<img src="images/products/product_TP-HHTJ_01.jpg" alt="TP-HHTJ 捷宝型手抄器光电头" />
				<img src="images/products/product_TP-HHTJ_02.jpg" alt="TP-HHTJ 捷宝型手抄器光电头">
			</td></tr>
		</table>
	<?php include("list_probes.php") ?>
</div>
</div><!--End of content-->
<?php include("footer.php") ?>