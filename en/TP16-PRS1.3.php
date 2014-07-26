<?php 
	header( "HTTP/1.1 301 Moved Permanently" );
	header('Location: TP-16.php');


	$title = "TesPro: ";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
	<div class="Products">
		<h1>TP16-PRS1.3现校仪光电头</h1>
		<p><img src="images/product_TP16-PRS1.3.jpg" alt="TP16-PRS1.3现校仪光电头">德力TP16-PRS1.3是专门为配套MTE公司PRS1.3现场校验仪而设计的产品。能将电能表计量光脉冲转换为现校仪需要的电脉冲。</p>
		<h3>主要用途：</h3>
		<ul>
			<li>适用兰吉尔、爱托利，以及各种国产电能表。</li>
			<li>可以和MTE公司PRS1.3现场校验仪接口，在现场进行电能表校验。</li>
		</ul>
		<h3>名称说明：</h3>
		<table id="ModelNameDesp">
			<thead>
			<tr>
				<td>TP</td>
				<td>15</td>
				<td>YX</td>
			</tr>
			</thead>
			<tr>
				<td>校验光电头系列标识</td>
				<td>插头针脚数</td>
				<td>插头型号</td>
			</tr>
		</table>
		<h3>规格特点：</h3>
		<ul>
			<li>采用标准的进口PRS1.3现场校验仪插头，具备高可靠性。</li>
			<li>光电头顶端设计有绿色LED指示灯，用以同步显示电量脉冲，无分频，LED发光管随电量脉冲闪烁,非常直观。</li>
			<li>采用3M加长的直引传输线。</li>
		</ul>
		<h3>系列化光电头产品可选项：</h3>
		<ul>
			<li>校验兰吉尔ZB、ZD、ZH、ZQ等电表的专用磁吸铁板附件TP-SZD和TP-SZH。</li>
			<li>选用TP-GS07型电能表光电头通用适配器，可用于任何电表校验。</li>
		</ul>
	</div>
</div><!--End of content-->
<?php include("../includes/Google_ProbeAdsTracking.php") ?>
<?php include("footer.php") ?>