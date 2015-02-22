<?php 
	
	$title = "TA-261电表通讯口测试器";
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
					<p>始于2005年原创设计的多功能通讯测试仪，用于电能表通信故障快速检测</p>
			  </div>
			  <div class="col-md-4 col-sm-5">
			  	<img src="images/banners/ta-261.png" />
			  </div>
			</div>		
		</div>
	</div><!-- ./Jumbo Title -->
	<div class="container">
		<div class="row">
			<div class="col-md-7"><!-- Left Column -->
				<h3>主要用途：</h3>
				<ul>
					<li>电能表通信故障快速检测与故障排除；</li>
					<li>费率电量抄读和上传，电表校时；</li>
				</ul>
				<h3>主要特点：</h3>
				<ul>
					<li>在掌上DOS平台上配置S261.0400软件，技术成熟；</li>
					<li>支持RS232、RS485、电力线载波，及光电口通信检测；</li>
					<li>支持DL/T645、IEC62056-21、DLMS、EDMI、ANSI等多种规约；</li>
					<li>自动探测未知电表地址、表号及通信波特率；</li>
					<li>支持抄读电能表各费率电量和最大需量；</li>
					<li>提供一体化通用/专用电表测试线和插头，现场使用方便。</li>
				</ul>
				<p>低成本和高性价比，便于普及推广。</p>
			</div><!-- ./Left Column -->
			<div class="col-sm-4 right-column"><!-- Right Column -->
				<img src="images/products/TA-261-01.jpg" alt="TA-261电表通讯接口测试器" />
			</div>
		</div>
	</div>
</div><!--End of content-->
<?php include("list_handheld-devices.php") ?>
<?php include("footer.php") ?> 
<?php include("../includes/Google_ProbeAdsTracking.php") ?>