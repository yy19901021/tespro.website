<?php 
	$title = "TP-11 校验光电头";
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
			  	<img src="images/banners/tp-11.png" />
			  </div>
			</div>		
		</div>
	</div><!-- ./Jumbo Title -->
	<div class="container">
		<div class="row">
			<div class="col-md-7"><!-- Left Column -->
				<h3>主要用途：</h3>
				<p>用于电表校验台对电能表光脉冲采样和校验。</p>
				<h3>技术特点：</h3>
				<ul>
					<li>适合红外至可见光的脉冲采样；</li>
					<li>额定工作电压：DC5V；</li>
					<li>标配直引线长度0.55M (可选)；</li>
					<li>对电量脉冲同步传输，绿色LED显示电量脉冲；</li>
					<li>磁吸附式固定，可使用TP-GS光电头活动支架；</li>
					<li>多种插头可选，可为用户提供任何指定插头，请参考<a href="zh/TP1_option_table.php">校验光电头插头选用表</a>。</li>
				</ul>
			</div><!-- ./Left Column -->
			<div class="col-sm-4 right-column"><!-- Right Column -->
				<!-- <img src="images/products/product_TP-11.jpg" alt="TP-11 校验光电头" /> -->
			</div>
		</div>
	</div>
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("footer.php") ?> 
<?php include("../includes/Google_ProbeAdsTracking.php") ?>