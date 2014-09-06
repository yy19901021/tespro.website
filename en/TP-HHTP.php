<?php 
	header( "HTTP/1.1 301 Moved Permanently" );
	header("Location: TP-PDA.php");

	$title = "";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
	<div class="Products">
		<h1>TP-HHTP 振中型手抄器光电头</h1>
		<p><img src="images/product_TP-HHTP.jpg" alt="TP-HHTP 振中型手抄器光电头">TP-HHTP型光电头是为振中800型掌上电脑配套设计的一款新产品。</p>
		<h3>使用标准：</h3>
		<ul>
			<li>IEC 62056-21（IEC1107） (IEC标准：电能表－抄表、费率和负荷控制的数据交换-第21部分：本地数据直接交换)。</li>
			<li>TP/T645－1997 多功能电能表通信规约</li>
		</ul>
		<h3>TP-HHTP技术特点：</h3>
		<ul>
			<li>符合IEC1107和TP/T645通讯技术规范的规定，采用磁铁吸附，通讯波特率可达19200。</li>
			<li>采用振中掌上机插头标准，在插头内配置了接口转换电路，以RS232串行通信标准连接光电头。具有抗干扰能力强，数据传输稳定可靠的特点。</li>
			<li>TP-HHTP是一种通用型读写头，可对兰吉尔、ABB、EDMI、爱托利，以及多种国产电能表的数据、参数读写。</li>
			<li>光电头界面带有缺口，可以和有缺口非标光电头界面吸附，同时又不影响IEC标准界面吸附，因此也更为通用。</li>
		</ul>
		<h3>可选项：</h3>
		<ul>
			<li>引线长度可选</li>
			<li>光电头带缺口界面和不带缺口界面的两种款式可选</li>
		</ul>
		<?php include("list_probes.php") ?>
	</div>
</div><!--End of content-->
<?php include("footer.php") ?>
<?php include("../includes/Google_ProbeAdsTracking.php") ?>