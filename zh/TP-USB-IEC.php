<?php 
	header( "HTTP/1.1 301 Moved Permanently" );
	header('Location: TP-IEC.php');
	$title = "泰易电子：TP-USB-IEC电表读写光电头（USB接口）";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
<div class="Products">
	<h1>TP-USB 电表光电头（USB接口）</h1>
	<table class="TwoColsLayout">
		<tr><td class="Left">
			<p>TP-USB-IEC 电表光电头是集我公司对光电头的专有技术而设计的一款新产品，2005年已获得国家专利。本型号产品设计了一体化USB接口，以配合笔记本电脑应用为主，具备美观实用及连接方便等特点。本型号产品适用于各种类型的电能表，是光电头系列产品中的精品。</p>
			<h3>主要用途：</h3>
			<p>用于电能表参数读写、电量数据抄读。</p>
			<h3>TP-USB-IEC技术特点：</h3>
			<ul>
				<li>符合IEC1107、DL/T645和USB2.0通讯技术规范，通讯波特率可达19200。</li>
				<li>TP-USB是将USB转换和光电头组合成一体化的通讯设备。</li>
				<li>标准引线长度2M。</li>
			</ul>
		</td><td class="Right">
			<img src="images/products/product_TP-USB.jpg" alt="TP-USB 振中型手抄器光电头" />
		</td></tr>
	</table>

	<?php include("list_probes.php") ?>
</div>
</div><!--End of content-->
<?php include("footer.php") ?>