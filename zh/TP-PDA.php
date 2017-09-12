<?php 
	$title = "TP-PDA手持设备光电头";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	include("header.php");
?>
<div id="content"><!--Start of content-->
	<div id="" class="jumbo-title product-page-title"><!-- Jumbo Title -->
		<div class="PageTitleBrg container">
			<div id="tp-intro" class="row">
			  <div class="col-md-7 col-sm-7">
					<h1><?php echo $title ?></h1>
					<!-- <p>2002年泰易开创性地采用RS232接口供电，领先于国际，从此去掉附加电池盒，为使用光电头减轻包袱，应用提速。</p> -->
			  </div>
			  <div class="col-md-4 col-sm-5">
			  	<img src="images/banners/tp-pda.png" />
			  </div>
			</div>		
		</div>
	</div><!-- ./Jumbo Title -->
	<div class="container">
		<div class="row">
			<div class="col-md-7"><!-- Left Column -->
				<h3>主要用途：</h3>
				<p>泰易各款掌上设备、PDA配置特定的光电头主要用于现场抄表，也用于电能表参数设置和对时。</p>
				<h3>主要型号：</h3>
				<table id="tp-pda-model-list" class="table model-table">
					<col class="Title" span="1" />
					<col span="1" />
					<tbody>
						<tr><th>TP-PDA-IEC-DP97</th><td>    for Dolphin 9700</td></tr>
						<tr><th>TP-PDA-ANSI-DP97</th><td> for Dolphin 9700</td></tr>
						<tr><th>TP-PDA-IEC-MC75</th><td>   for Motorola MC75xx</td></tr>
						<tr><th>TP-PDA-ANSI-MC75</th><td>for Motorola MC75xx</td></tr>
						<tr><th>TP-PDA-IEC-iPad</th><td>      for Apple iPad</td></tr>
						<tr><th>TP-PDA-IEC-T</th><td>           泰易TA-262，IEC 标准</td></tr>
						<tr><th>TP-PDA-IEC-645</th><td>       泰易TA-262，DLT/645 标准</td></tr>
						<tr><th>TP-PDA-IEC-HTTP</th><td>    振中手持终端900系列</td></tr>
						<tr><th>TP-PDA-IEC-HTTJ</th><td>   捷宝手持终端9800/A188系列</td></tr>
					</tbody>
				</table>
				<p>TP-PDA: 采用USB-Mini或USB-OTG接口，支持和主流PDA，iPad等智能设备接口。例如可用于Motorola 75系列，Dolphin97系列，Apple-iPad、三星、联想等平板电脑设备系列。</p>
				<h3>主要参数：</h3>
				<table id="SpecTable" class="table spec-table">
					<col class="Title" span="1">
					<col span="1">
					<tr><th>标准：</th><td>符合IEC, ANSI 或中国DLT/645标准；</td>
					<tr><th>电源：</th><td>从PDA插口供电，3.3～5V，25mA；</td>
					<tr><th>插头：</th><td>符合特定PDA终端的规定插头和接口规范；</td>
					<tr><th>线缆：</th><td>Tespro专用通讯线缆，默认长度1.5m</td>
					<tr><th>环境：</th><td>工作环境温度：-15℃~80℃ (5°F ~ 176°F)；</td>
					<tr><th>速率：</th><td>最高38400bps；</td>
					<tr><th>固定标准：</th><td>采用IEC62056-21 or ANSI C12.18标准规定的强磁性吸附；</td>

				</table>
				<h3>可选项：</h3>
				<ul>
					<li>泰易可为客户定制各类平板数字设备专用接口光电头。</li>
          <li>可以按照客户要求的长度提供线缆。</li>
				</ul>
			</div><!-- ./Left Column -->
			<div class="col-sm-4 right-column"><!-- Right Column -->
				<!-- <img src="images/products/product_TP-PDA.jpg" alt="蓝牙通讯光电头"/> -->
			</div>
		</div>
	</div>
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("footer.php") ?> 
<?php include("../includes/Google_ProbeAdsTracking.php") ?>