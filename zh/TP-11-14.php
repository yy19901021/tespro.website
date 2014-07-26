<?php 
	$title = "TP-11、TP-14 电表校验光电头";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
<div class="Products">
	<h1>TP-11、TP-14电表校验光电头</h1>
	<?php
		include("breadcrumnav.php");	
	?>
	<table class="TwoColsLayout">
		<tr><td class="Left">
			<h3>用途：</h3>
			<p>用于电表精度校验的光脉冲采样</p>
			<h3>型号：</h3>
			<ul>
				<li>TP-11：对光脉冲不分频，用于低电表常数。</li>
				<li>TP-14：对光脉冲四分频，用于高电表常数。</li>
			</ul>
			<h3>应用特点：</h3>
			<ul>
				<li>多种外形和颜色可选，引出线长度和插头可选。</li>
				<li>光电头背面有发光二极管同步显示电量脉冲。无分频光电头以绿色LED显示，四分频光电头以红色LED显示。</li>
			</ul>
			<h3>子型号与选配件：</h3>
			<ul>
				<li>适配任何校表台接口：请参照《<a href="zh/TP1_option_table.php">校验光电头插头选用表</a>》选用插头型号。</li>
				<li>为了固定在电表上可使用<a href="zh/TP-GS08.php">TP-GS08</a>光电头活动支架。</li>
				<!--<li>用于兰吉尔电表校验可使用<a href="zh/TP-SZD.php">TP-SZD</a>或<a href="zh/TP-SZH.php">TP-SZH</a>专用适配器。</li>-->
			</ul>
		</td><td class="Right">
			<img src="images/products/product_TP11_TP14.jpg" alt="TP-11、TP-14 电表校验光电头" />
		</td></tr>
	</table>
	<?php include("list_probes.php") ?>
</div>
</div><!--End of content-->
<?php include("footer.php") ?>