<?php 
	$title = "TP-USB 电表光电头";
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
					<p>TP-USB-IEC 电表光电头是集我公司对光电头的专有技术而设计的一款新产品，2005年已获得国家专利。本型号产品设计了一体化USB接口，以配合笔记本电脑应用为主，具备美观实用及连接方便等特点。本型号产品适用于各种类型的电能表，是光电头系列产品中的精品。</p>
			  </div>
			  <div class="col-md-4 col-sm-5">
			  	<img src="images/banners/reading-meter.png" class="pull-right" style="margin-top: 10px; width: 260px;" />
			  </div>
			</div>		
		</div>
	</div><!-- ./Jumbo Title -->
	<div class="container">
		<div class="row">
			<div class="col-md-8"><!-- Left Column -->
				<h3>主要用途：</h3>
				<p>用于电能表参数读写、电量数据抄读。</p>
				<h3>子型号：</h3>
				<ul>
					<li>TP-USB-IEC：符合IEC62056-21标准</li>
					<li>TP-USB-ANSI-N: 兼容 ANSI C12.18 协议（正常标准，较多用于GE、Itron电表）</li>
					<li>TP-USB-ANSI-S: 兼容 ANSI C12.18 (较多用于西门子和ION电表)</li>
					<li>TP-USB-ANSI-U: 兼容 ANSI C12.18 (通用型，可在正常标准和西门子标准间切换)</li>
				</ul>
				<h3>技术特点：</h3>
				<ul>
					<li>符合IEC1107、ANSIC12.18、DL/T645和USB2.0通讯技术规范，通讯波特率可达38400。</li>
					<li>TP-USB是将USB转换和光电头组合成一体化的通讯设备。</li>
					<li>标准引线长度2M。</li>
				</ul>
				<p>泰易追求细节完美，经过多年的改进，技术成熟，一体化结构，可靠耐用，值得信耐。</p>
			</div><!-- ./Left Column -->
			<div class="col-sm-4 right-column"><!-- Right Column -->
				<img src="images/products/product_TP-USB.jpg" alt="TP-USB USB接口电表光电头" />
				<img src="images/products/product_TP-USB-ANSI_demo.jpg" alt="TP-USB USB接口电表光电头" />
			</div>
		</div>
	</div>
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("footer.php") ?> 
<?php include("../includes/Google_ProbeAdsTracking.php") ?>