<?php 
	$title = "TC-PCB-01半自动PCB测试台";
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
			  	<!-- <img src="images/banners/reading-meter.png" /> -->
			  </div>
			</div>		
		</div>
	</div><!-- ./Jumbo Title -->
	<div class="container">
		<div class="row">
			<div class="col-md-7"><!-- Left Column -->
				<h3>主要用途：</h3>
				<ul>
					<li>是通用PCB电路板成品测试台，成品组装前不可缺少的PCB质检设备。</li>
				</ul>
				<h3>功能特点：</h3>
				<ul>
					<li>采用一体化结构设计，集电气、机械、测试于一体，单相供电；</li>
         	<li>采用MCU控制，监测的可编程控设备，辅助人工操作，实现测试半自动化；</li>
					<li>PCB台面按模块化设计，适应更换不同类型PCB；</li>
					<li>柔性气动压接结构，保证PCB压接的柔韧性，保证压接良好；</li>
					<li>配置多路DI、DO、AI、AO，实现全自动化检测；</li>
					<li>一体化监视，触摸屏控制，简单易操作。</li>
				</ul>
				<h3>可选项</h3>
				<ul>
					<li>承接客户定制专用PCB测试设备</li>
				</ul>
			</div><!-- ./Left Column -->
			<div class="col-sm-4 right-column"><!-- Right Column -->
				<img src="images/products/product_TC-PCB-01.jpg" alt="TC-PCB-01 半自动PCB测试台" />
			</div>
		</div>
	</div>
</div><!--End of content-->
<?php include("list_testing-devices.php") ?>
<?php include("footer.php") ?> 
<?php include("../includes/Google_ProbeAdsTracking.php") ?>