<?php 
	$title = "TP-RF微功率无线光电头";
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
			  	<img src="images/banners/tp-rf.png" />
			  </div>
			</div>		
		</div>
	</div><!-- ./Jumbo Title -->
	<div class="container">
		<div class="row">
			<div class="col-md-7"><!-- Left Column -->
				<h3>主要用途：</h3>
				<p>用于需要传输电表数据但又不能使用线缆连接的情况，尤其是距离较远的环境。</p>
				<h3>主要型号：</h3>
				<ul>
					<li>TP-RF-IEC: 适合IEC和国内电表应用；</li>
					<li>TP-RF-ANSI-N：适合ANSI标准下的-N型电表，例如GE、Itron；</li>
					<li>TP-RF-ANSI-S：适合ANSI标准下的光电第二型电表，例如西门子，ION电表；</li>
				</ul>
				<h3>主要特点：</h3>
				<ul>
					<li>利用开放的无线通信支持多种微功率无线通信模式；</li>
					<li>采用400MHz微功率无线通信模式，支持通讯距离最大300M；</li>
					<li>支持IEC62056-21，或ANSI C12-18的相关标准；</li>
					<li>内置电池支持连续通讯24小时以上；</li>
					<li>LED电源灯显示内置电池剩余电量，LED状态灯指示通讯状态；</li>
					<li>提供USB接口天线作通讯收发；</li>
					<li>泰易可为客户定制各类RF专用接口光电头。</li>
				</ul>
			</div><!-- ./Left Column -->
			<div class="col-sm-4 right-column"><!-- Right Column -->
				<img src="images/products/product_TP-RF.jpg" alt="蓝牙通讯光电头"/>
			</div>
		</div>
	</div>
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("footer.php") ?> 
<?php include("../includes/Google_ProbeAdsTracking.php") ?>