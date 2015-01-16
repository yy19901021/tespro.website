<?php 
	$title = "BT蓝牙光电头";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
<div class="Products">
	<h1>BT蓝牙光电头</h1>
	<?php
		include("breadcrumnav.php");	
	?>
		<table class="TwoColsLayout">
			<tr><td class="Left">
				<h3>主要用途：</h3>
				<p>用于需要传输电表数据，但是又不能使用线缆连接，却具备蓝牙通讯接口的情况。</p>
				<h3>主要型号：</h3>
				<ul>
					<li>TP-BT-IEC：     适合IEC和国内电表应用；</li>
					<li>TP-BT-ANSI-N：    适用于ANSI标准电表的读写应用（例如GE、Itron/ABB）</li>
					<li>TP-BT-ANSI-S：    适用于ANSI标准第二型电表的读写应用（例如西门子电表）</li>
				</ul>
				<h3>主要特点：</h3>
				<ul>
					<li>符合蓝牙2.1/4.1 标准，支持通讯距离最大10M。</li>
					<li>支持具备蓝牙接口的各类设备接口；</li>
					<li>内置电池支持连续通讯24小时以上；</li>
					<li>LED电源灯显示内置电池的剩余电量，LED状态灯指示通讯状态；</li>
					<li>提供USB接口天线作通讯收发；</li>
				</ul>
				<p>泰易可为客户定制各类RF专用接口光电头。</p>
			</td><td class="Right">
				<img src="images/products/product_TP-BT.jpg" width="250" alt="蓝牙通讯光电头"/>
			</td></tr>
		</table>

</div>
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("footer.php") ?>