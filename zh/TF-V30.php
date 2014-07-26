<?php 
	$title = "TF-V30 AMR专用调制解调器";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="Content"><!--Start of content-->
<div class="Products">
	<h1>TF-V30 AMR专用调制解调器</h1>
	<?php
		include("breadcrumnav.php");	
	?>
	<table class="TwoColsLayout">
		<tr><td class="Left">
			<p>TF-V30 调制解调器是为AMR应用而开发，采用调制解调芯片和微处理器设计。可以方便地通过市话网或内部电话专线实现远程数据传输和测控功能。经实践证明TF-V30 可以取代进口产品从而降低成本，产品如下图。</p>
			<h3>应用</h3>
			<ul>
				<li>自动抄表(AMR)系统。</li>
				<li>远程数据采集和控制系统。</li>
				<li>智能小区系统。</li>
			</ul>
			<h3>功能：</h3>
			<ul>
				<li>支持V.22bis，V.21，V.22，V.23，Bell212A，Bell202和Bell103（半双工）等协议标准。</li>
				<li>支持音频拨号/自动应答功能（接入PSTN）。</li>
				<li>支持直接专线方式，无需握手过程。</li>
				<li>与系统连接采用RS232串口方式硬件上支持DTR，DSR，CTS，最高支持2400传输波特率。</li>
				<li>支持标准的AT命令集，传输波特率，数据格式可由软件设定。</li>
				<li>具备传输指示灯T/R，发送时（T）为红色，接收时（R）为绿色。</li>
				<li>配置插头式开关稳压电源，插头输入电压85－240VAC。</li>
				<li>面板上具备直流电源正常指示灯、收发传输指示灯。</li>
				<li>工作环境：温度：-40°C~85°C，相对湿度5％～80％。</li>
				<li>增加MODEM的串口DSR、CTS指示输出，在底板上将DSR与CTS短接，共用一路RS232电平指示输出。软件上添加了DSR指示输出。</li>
			</ul>
		</td><td class="Right">
			<img src="images/products/product_TF-V30.jpg" alt="TF-V30 调制解调器" />
		</td></tr>
	</table>
	<?php include("List_MeterCommunication.php") ?>
</div>
</div><!--End of content-->
<?php include("footer.php") ?>