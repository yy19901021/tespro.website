<?php 
	$title = "TP-232 电表光电头";
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
					<p>2002年泰易开创性地采用RS232接口供电，领先于国际，从此去掉附加电池盒，是RS232供电光电头的原创设计者，为使用光电头减轻包袱，降低成本。</p>
			  </div>
			  <div class="col-md-4 col-sm-5">
			  	<img src="images/banners/tp-232.png" />
			  </div>
			</div>		
		</div>
	</div><!-- ./Jumbo Title -->
	<div class="container">
		<div class="row">
			<div class="col-md-7"><!-- Left Column -->
			<h3>主要用途：</h3>
			<p>用于电能表、热表的参数读写、数据抄读。</p>
			
			<h3>子型号</h3>
			<ul>
				<li>TP-232-IEC：IEC62056-21</li>
				<li>TP-232-ANSI-N: 兼容 ANSI C12.18标准（常规标准，较多用于GE、Itron电表）</li>
				<li>TP-232-ANSI-S: 兼容 ANSI C12.18 Type2标准 (较多用于西门子和ION电表）</li>
				<li>TP-232-ANSI-U: 兼容以上两种标准 (通用型，可在-N、-S之间切换）</li>
			</ul>
			
			<h3>技术特点：</h3>
			<ul>
				<li>符合EIA232D的RS232标准；</li>
				<li>强磁吸附，使用于较宽的温度范围，-15 ~+80&deg;；</li>
				<li>泰易的ANSI光电头采用强化壳体，坚固耐用；</li>
				<li>采用泰易一体化DB-9孔型插头和泰易特殊的串口取电技术；</li>
				<li>标准引线长度2M。</li>
			</ul>
			<p>泰易追求细节完美，经过多年的改进，技术成熟，一体化结构，可靠耐用，值得信耐。</p>
			<h3>可选项：</h3>
			<p>可选用螺旋线</p>
			</div><!-- ./Left Column -->
			<div class="col-sm-4 right-column"><!-- Right Column -->
				<!-- <img src="images/products/TP-232-01.jpg" alt="TP-232" /> -->
				<img src="images/products/product_TP-232-ANSI_demo.jpg" width="300" alt="TP-232 Optical Probe" />
			</div>
		</div>
	</div>
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("footer.php") ?> 
<?php include("../includes/Google_ProbeAdsTracking.php") ?>