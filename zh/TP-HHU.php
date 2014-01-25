<?php 
	header( "HTTP/1.1 301 Moved Permanently" );
	header("Location: TP-Handheld.php");
	
	$title = "泰易电子：TP-HHU 手抄器光电头";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
<div class="Products">
	<h1>TP-HHU 手抄器光电头</h1>
	<table class="TwoColsLayout">
		<tr><td class="Left">
			<p>珠海泰易电子是国内品种最全的电能表光电头专业公司。自成立以来已经开发了数十种不同的光电头产品。其中TP-HHU型是为各种款式掌上电脑配套设计的手抄器光电头产品。可用于电表抄表、时间同步、费率下载。其通用性适用于兰吉尔、爱托利、红相、威胜、龙电等各种电表。</p>
			<h3>使用标准</h3>
			<ul>				<li>IEC 62056-21（IEC 61107）</li>				<li>DL/T645－1997 多功能电能表通信规约</li>			</ul>
			<h3>版本型号：</h3>
			<ul>				<li>TP-HHU-T 振中型</li>				<li>TP-HHU-L 兰德型</li>				<li>TP-HHU-J 捷宝型</li>
			</ul>
			<h3>TP-HHU技术特点：</h3>
			<ul>
				<li>通讯波特率可达19200bps。</li>				<li>具备磁吸附力，可以吸附内含磁铁、铁板的电表光电通讯口。</li>				<li>采用RS232串行通信标准连接</li>				<li>由手持设备供电</li>				<li>引出线采用柔软的高档塑料引出线，长度150cm。</li>				<li>使用温度范围-20~50C°</li>				<li>使用时光电头引出线应垂直向下，其角度偏差不超过±15°。</li>				<li>光电头内有较强的磁铁，携带中应注意远离磁卡，防止影响卡内代码。</li>
			</ul>
		</td><td class="Right">
			<img src="images/products/product_TP-HHU-T.jpg" alt="TP-HHU" />
		</td></tr>
	</table>

	<?php include("list_probes.php") ?>
</div>
</div><!--End of content-->
<?php include("footer.php") ?>