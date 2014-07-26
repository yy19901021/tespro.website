<?php 
	$title = "TA-161（V3.0-09版）简易型电表通讯口测试器";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
<div class="Products">
	<h1>TA-161（V3.0-09版）简易型电表通讯口测试器</h1>
	<?php
		include("breadcrumnav.php");	
	?>
	<table class="TwoColsLayout">
		<tr><td class="Left">
			<p>2009年推出的TA-161电表通讯接口测试器是建立在振中型掌上电脑平台上的实用新型产品，和TA-261属于同一系列。可用来可快速判断电表通讯口的好坏，探测电表通讯口的波特率和地址，从而显著地提高工作效率。</p>
			<h3>设备组成：</h3>
			<p>TA-161型电表通讯接口测试器主要由振中 TP900型掌上电脑、测试软件和测试线组成。</p>
			<h3>主要用途：</h3>
			<p>适合于现场、实验室或生产线上对电表通讯接口进行快速功能测试，探测电表地址和波特率。</p>
			<p>适合于已经具备振中TP900掌上电脑的用户，在此基础上进行功能扩充简便可行，经济实用。</p>
			<p>主要功能和技术指标与TA-261基本相同，但缺少CS电流环串口测试。</p>
			<h3>扩展用途：</h3>
			<p>如果在掌上电脑上配置了应用软件，就可进行抄表或其它应用。</p>
			<h3>主要功能：</h3>
			<ul>
				<li>电表通讯口故障判断：可检测通讯口是“硬件故障”或是“软件故障”。</li>
				<li>可探测未知电表地址：用于设备地址被忘记，或者需要确认表号（地址）。</li>
				<li>可探测电表通讯波特率：用于设备波特率忘记，或者需要确认波特率。</li>
				<li>保存测试报告：测试结果以文本文件保存，便于复查。</li>
			</ul>			
			<h3>技术指标：</h3>
			<ul>
				<li>多规约配置：支持IEC62056-21（1107）、IEC87-5-102，DL/T645（1996、2007）、DLMS、EDMI、Alpha、MAXCOM等多种通信规约，通用性强，涵盖中国大陆应用的各种电表。</li>
				<li>多种通讯接口：RS485、RS232、调制红外（38kC）、光电头共5种接口。</li>
				<li>支持多地址测试：支持RS485串口在线连续多地址测试，不用打开电表铅封。</li>
				<li>支持波特率自动探测：300-19200bps，自动波特率测试可提高效率。</li>
			</ul>
		</td><td class="Right">
			<img src="images/products/product_TA-161.jpg" alt="TA-161 简装型电能表通讯口测试器" />
		</td></tr>
	</table>
	
	<?php include("List_MeterCommunication.php") ?>
</div>
</div><!--End of content-->
<?php include("footer.php") ?>