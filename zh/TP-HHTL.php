<?php 
	header( "HTTP/1.1 301 Moved Permanently" );
	header("Location: TP-Handheld.php");
	
	$title = "泰易电子：TP-HHTL 兰德型手抄器光电头";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
<div class="Products">
	<h1>TP-HHTL 兰德型手抄器光电头</h1>
	<?php
		include("breadcrumnav.php");	
	?>
		<table class="TwoColsLayout">
			<tr><td class="Left">
				<p>TP-HHTL型光电头是特地为兰德2800型掌上电脑配套设计的专用产品。</p>
				<h3>TP-HHTL技术特点：</h3>
				<ul>
					<li>通讯波特率可达300－19200bps。</li>
					<li>采用RS232接口标准，抗干扰能力强，通讯稳定可靠，因为故障率极低、结实耐用而深受用户好评。</li>
					<li>TP-HHTL是一种通用型读写头，可对兰吉尔、ABB、EDMI、爱托利，以及多种国产电能表的数据、参数读写。</li>
					<li>采用柔软的塑料引出线，标准长度：150cm。</li>
				</ul>
				<h3>可选件：</h3>
				<ul>
					<li>光电头专用工具包</li>
					<li>光电头界面保护盖</li>
					<li>引出线长度可选</li>
				</ul>
			</td><td class="Right">
				<img src="images/products/product_TP-HHTL.jpg" alt="TP-HHTL 兰德型手抄器光电头" />
			</td></tr>
		</table>
	<?php include("list_probes.php") ?>
</div>
</div><!--End of content-->
<?php include("footer.php") ?>