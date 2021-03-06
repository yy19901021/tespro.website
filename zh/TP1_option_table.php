<?php 
	$title = "校验光电头插头选用表";
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
				<p>泰易TP－1x系列电能表校验光电头系列，可以按照客户的要求定制、更换插头、引线，以达到更满意的使用效果。TP-1x系列包含以下型号：</p>
				<ul>
					<li><a href="zh/TP-11.php">TP-11 电表校验光电头</a></li>
					<li><a href="zh/TP-13.php">TP-13 有功、无功双脉冲电表校验光电头</a></li>
					<li><a href="zh/TP-15.php">TP-15 双频校验光电头</a></li>
					<li><a href="zh/TP-16.php">TP-16 现校仪光电头</a></li>
					<li><a href="zh/TP-17.php">TP-17 机械/电子表双功能校验光电头</a></li>
					<li><a href="zh/TP-18.php">TP-18 窄型校验光电头</a></li>
				</ul>
				<h3>校验光电头型号说明（以TP-15-xy为例）：</h3>
				<table id="ModelNameDesp" class="DataTable">
					<thead>
					<tr>
						<td>TP</td>
						<td>15</td>
						<td>x</td>
						<td>y</td>
					</tr>
					</thead>
					<tr>
						<td>泰易光电头系列标识</td>
						<td>光电头型号</td>
						<td>插头针脚数</td>
						<td>插头型号</td>
					</tr>
				</table>
				<p>例如，如果选用以下第一种插头，则型号为：TP-15-5a，5a代表5针，a型插头。</p>
				<h3>校验光电头订货插头选择表：</h3>
				<table class="DataTable">
					<thead>
					<tr>
						<td>选项</td>
						<td>插头标识</td>
						<td>插头外观</td>
						<td>应用参考</td>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>1</td>
						<td>xy=5a</td>
						<td><img src="images/products/product_TP1_5a.jpg" /></td>
						<td>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>xy=4b</td>
						<td><img src="images/products/product_TP1_4a.jpg" /></td>
						<td>
						</td>
					</tr>
					<tr>
						<td>3</td>
						<td>xy=6c<br /></td>
						<td><img src="images/products/product_TP1_6a.jpg" /></td>
						<td>PS2插头</td>
					</tr>
					<tr>
						<td>4</td>
						<td>xy=4c<br /></td>
						<td><img src="images/products/product_TP1_4b.jpg" /></td>
						<td>S4插头</td>
					</tr>
					<tr>
						<td>5</td>
						<td>xy=5b</td>
						<td><img src="images/products/product_TP1_5b.jpg" /></td>
						<td></td>
					</tr>
					<tr>
						<td>6</td>
						<td>xy=4d</td>
						<td><img src="images/products/product_TP1_4c.jpg" /></td>
						<td>
						</td>
					</tr>
					<tr>
						<td>7</td>
						<td>xy=5d</td>
						<td><img src="images/products/product_TP1_5c.jpg" /></td>
						<td>
						</td>
					</tr>
					<tr>
						<td>8</td>
						<td>xy=5e</td>
						<td><img src="images/products/product_TP1_5d.jpg" /></td>
						<td>PRS 1.3, PWS 2.3</td>
					</tr>
					<tr>
						<td>9</td>
						<td>xy=7f</td>
						<td><img src="images/products/product_TP1_7f.jpg" /></td>
						<td>
						</td>
					</tr>
					<tr>
						<td>10</td>
						<td>xy=3g</td>
						<td><img src="images/products/product_TP1_3a.jpg" /></td>
						<td>PRS 1.3</td>
					</tr>
					</tbody>
				</table>
			</div><!-- ./Left Column -->
			<div class="col-sm-4 right-column"><!-- Right Column -->
				<!-- <img src="images/products/product_TP-232.jpg" width="300" alt="TP-232-IEC " /> -->
				<!-- <img src="images/products/product_TP-232-ANSI_demo.jpg" width="300" alt="TP-232 Optical Probe" /> -->
			</div>
		</div>
	</div>
</div><!--End of content-->
<?php include("list_probes.php") ?>
<?php include("footer.php") ?> 
<?php include("../includes/Google_ProbeAdsTracking.php") ?>