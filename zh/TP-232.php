<?php 
	$title = "TP-232 电表光电头";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
<div class="Products">
	<h1>TP-232 电表光电头（232接口）</h1>
	<table class="TwoColsLayout">
		<tr><td class="Left">
			<h3>主要用途：</h3>
			<p>用于电能表参数读写、电量数据抄读。</p>
			
			<h3>子型号</h3>
			<ul>
				<li>TP-232-IEC：IEC标准</li>
				<li>TP-USB-ANSI-N: 兼容 ANSI C12.18 协议（正常标准，较多用于GE、Itron电表）</li>
				<li>TP-USB-ANSI-S: 兼容 ANSI C12.18 (较多用于西门子和ION电表)</li>
				<li>TP-USB-ANSI-U: 兼容 ANSI C12.18 (通用型，可在正常标准和西门子标准间切换)</li>
			</ul>
			
			<h3>技术特点：</h3>
			<ul>
				<li>符合EIA232D的RS232标准；</li>
				<li>强磁吸附，使用于较宽的温度范围； -15 ~+80&deg;；</li>
				<li>泰易的ANSI光电头采用强化壳体，坚固耐用；</li>
				<li>采用泰易一体化DB-9孔型插头和泰易特殊的串口取电技术；</li>
				<li>标准引线长度2M。</li>
			</ul>

		</td><td class="Right">
			<img src="images/products/product_TP-232-IEC.jpg" width="300" alt="TP-232-IEC " />
			<img src="images/products/product_TP-232-ANSI_demo.jpg" width="300" alt="TP-232 Optical Probe" />
		</td></tr>
	</table>
</div>
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("footer.php") ?>