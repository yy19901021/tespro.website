<?php 
	$title = "Tespro's Worldwide Clients";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	$CurrentTab = 2;
	include("header.php");
?>

<div id="ClientsPageTitle" class="PageTitle ">
	<div class="PageTitleBrg container">
	
		<div id="tp-intro" class="row">
		  <div class="col-md-7">
			<h1>Customers from the World</h1>
			<p></p>	  
		  </div>
		  <div class="col-md-4">
<!-- 		  	<img src="images/banners/reading-meter.png" class="pull-right" style="margin-top: 50px; width: 340px;" /> -->
		  </div>
		</div>		
	</div>
</div>

<!--Start of content-->
<div id="Content">
	<div class="container">
		<ul id="client-list" class="row">
			<li><a href="http://www.ge.com"><img src="images/clients/ge.png" alt="GE"></a></li>
			<li><a href="http://www.csg.cn"><img src="images/clients/south_grid.png" alt="China Southern Grid"></a></li>
			<li><a href=""><img src="images/clients/elster.png" alt="ELSTER"></a></li>
			<li><a href=""><img src="images/clients/sensus.png" alt="SENSUS"></a></li>
			<li><a href="http://www.itron.com/"><img src="images/clients/itron.png" alt="Itron"></a></li>
			<li><a href="http://www.landisgyr.com/"><img src="images/clients/landis_gyr.png" alt="Landis & Gyr"></a></li>
			<li><a href="http://www.sgcc.com.cn"><img src="images/clients/state_grid.png" alt="China State Grid"></a></li>
			<li><a href="http://www.edmi-meters.com/"><img src="images/clients/edmi.png" alt="EDMI"></a></li>
		</ul>
	</div>
</div><!--End of content-->

<?php include("footer.php") ?>