<?php 
	$title = "RF微功率无线光电头";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
<div class="Products">
	<h1>RF微功率无线光电头</h1>
	<?php
		include("breadcrumnav.php");	
	?>
		<table class="TwoColsLayout">
			<tr><td class="Left">
				<h3>主要用途：</h3>
				<p>用于需要传输电表数据但又不能使用线缆连接的情况，尤其是距离较远的环境。</p>
				<h3>主要型号：</h3>
				<ul>
					<li>TP-RF-IEC: 适合IEC和国内电表应用；</li>
					<li>TP-RF-ANSI-N：适合ANSI标准下的-N型电表，例如GE、Itron；</li>
					<li>TP-RF-ANSI-S：适合ANSI标准下的光电第二型电表，例如西门子；</li>
				</ul>
				<h3>主要特点：</h3>
				<ul>
					<li>利用开放的无线通信支持多种微功率无线通信模式；</li>
					<li>采用400MHz微功率无线通信模式，支持通讯距离最大300M；</li>
					<li>内置电池支持连续通讯24小时以上；</li>
					<li>LED电源灯显示内置电池剩余电量，LED状态灯指示通讯状态；</li>
				</ul>
			</td><td class="Right">
				<img src="images/products/product_TP-RF.jpg" alt="蓝牙通讯光电头"/>
			</td></tr>
		</table>
	<?php include("list_probes.php") ?>
</div>
</div><!--End of content-->
<?php include("footer.php") ?>