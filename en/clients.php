<?php 
	$title = "Our Clients From The World";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	$CurrentTab = 2;
	include("header.php");
?>
<!--Start of content-->
<div id="content">
	<div id="client-page-title" class="jumbo-title">
		<div class="PageTitleBrg container">
			<div id="tp-intro" class="row">
			  <div class="col-md-7">
				<h1><?php echo $title ?></h1>
				<p><br /><br /></p>
			  </div>
			  <div class="col-md-4">
	<!-- 		  	<img src="images/banners/reading-meter.png" class="pull-right" style="margin-top: 50px; width: 340px;" /> -->
			  </div>
			</div>		
		</div>
	</div>
	<div class="container">
		<h1></h1>
		<ul id="client-list">
			<li><a href="http://www.ge.com"><img src="images/clients/ge.gif" alt="GE"></a></li>
			<li><a href="http://www.csg.cn"><img src="images/clients/south_grid.gif" alt="China Southern Grid"></a></li>
			<li><a href=""><img src="images/clients/elster.gif" alt="ELSTER"></a></li>
			<li><a href=""><img src="images/clients/sensus.gif" alt="SENSUS"></a></li>
			<li><a href="http://www.itron.com/"><img src="images/clients/itron.gif" alt="Itron"></a></li>
			<li><a href="http://www.landisgyr.com/"><img src="images/clients/landis_gyr.gif" alt="Landis & Gyr"></a></li>
			<li><a href="http://www.sgcc.com.cn"><img src="images/clients/state_grid.jpg" alt="China State Grid"></a></li>
			<li><a href="http://www.edmi-meters.com/"><img src="images/clients/edmi.gif" alt="EDMI"></a></li>
		</ul>
	</div>
</div><!--End of content-->
<?php include("footer.php") ?>