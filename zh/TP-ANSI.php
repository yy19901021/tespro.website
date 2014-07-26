<?php 
	$title = "ANSI标准常用读写光电头";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
<div class="Products">
	<h1>ANSI标准常用读写光电头</h1>
	<?php
		include("breadcrumnav.php");	
	?>
	<table class="TwoColsLayout">
		<tr><td class="Left">
			<p>2002年泰易公司开始提供串口取电的光电头，2005年获批USB光电头专利。通过创新和优化，泰易光电头系列逐渐成为技术成熟、经久耐用、覆盖全面的优秀品牌代表。</p>

			<p>按照ANSI C12.18标准有两种不同通信特性，泰易公司设计有-N，-S，-U三种子型号满足ANSI不同子标准的要求（“xxx”表示通讯接口选项）：</p>
			<ul>
				<li>TP-xxx-ANSI-N：C12.18标准常规型， 以GE、Itron电表为代表；</li>
				<li>TP-xxx-ANSI-S：C12.18光电口2型，以Siemens、ION电表为代表；</li>
				<li>TP-xxx-ANSI-U：通用型，通过软件控制切换 -N或 -S。</li>
			</ul>
			<h3>主要用途：用于电表数据读出和参数设置</h3>
			<h3>TP-ANSI主要特点：</h3>
			<ul>
				<li>通讯波特率可达300～38400bps；</li>
				<li>强磁吸附，使用于较宽的温度范围； -15 ~+80&deg;；</li>
				<li>泰易的ANSI光电头采用强化壳体，坚固耐用。</li>
				<li>RS232接口光电头采用泰易的串口取电技术</li>
			</ul>
			<h3>常用型号有2种接口可选：</h3>
			<ul>
				<li>TP-232-ANSI-x：符合EIA232D的RS232标准，采用泰易一体化DB-9孔型插头和泰易特殊的串口取电技术，标准引线长度2M；</li>
				<li>TP-USB-ANSI-x：符合USB 2.0标准，泰易提供的USB驱动支持所有操作系统；</li>
			</ul>
		</td><td class="Right">
				<img src="images/products/product_TP-ANSI-1.jpg" width="280" alt="TP-ANSI电表读写光电头" />
				<img src="images/products/product_TP-ANSI-2.jpg" width="280" alt="TP-ANSI电表读写光电头" />
				<img src="images/products/product_TP-ANSI-3.jpg" width="280" alt="TP-ANSI电表读写光电头" />

		</td></tr>
	</table>

	<?php include("list_probes.php") ?>
</div>
</div><!--End of content-->
<?php include("footer.php") ?>