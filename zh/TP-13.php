<?php 
	$title = "TP-13 双脉冲电表校验光电头";
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
			  	<img src="images/banners/tp-13.png" />
			  </div>
			</div>		
		</div>
	</div><!-- ./Jumbo Title -->
	<div class="container">
		<div class="row">
			<div class="col-md-7"><!-- Left Column -->
				<h3>主要用途：</h3>
				<p>用于电表校验台对三相电能表有、无功光脉冲同时采样和校验。</p>
				<h3>技术特点：</h3>
				<ul>
					<li>集成了有功、无功两路光脉冲传感器，可以同时采样有功、无功电量脉冲；</li>
					<li>两路光脉冲传感器间距可调(12-24mm)，以便分别瞄准有、无功两路电量脉冲；</li>
					<li>适合于电表台固定支架应用，一次定位脉冲源后可免重复定位操作，提高校表工效；</li>
					<li>可适配电表台双误差计或单误差计工作模式；</li>
					<li>配置LED灯辅助瞄准脉冲源，调试方便。</li>
				</ul>
			</div><!-- ./Left Column -->
			<div class="col-sm-4 right-column"><!-- Right Column -->
				<img src="images/products/product_TP-13.jpg" alt="TP-13 双脉冲电表校验光电头" />
			<!-- <img src="images/products/product_TP-13-2.jpg" alt="TP-13 双脉冲电表校验光电头" /> -->
			</div>
		</div>
	</div>
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("footer.php") ?> 
<?php include("../includes/Google_ProbeAdsTracking.php") ?>