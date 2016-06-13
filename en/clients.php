<?php 
	$title = "Our Clients From The World";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	$CurrentTab = 2;
	include("header.php");
?>
<<<<<<< HEAD

<div id="DownloadTitle" class="PageTitle"><div class="PageTitleBrg"><img src="images/Clients_Title_en.png" alt="Everything meters want" /></div></div><div class="Shadow1"></div><div class="Shadow2"></div><div class="Shadow3"></div>
<div id="Content"><!--Start of content-->
<style>
#Clients td{border: 1px solid silver; padding: 38px;}
#Clients td img{width: 150px; height: 150px;}
#Clients a:link{border: 0;}
</style>

	<table id="Clients">
		<tr>
			<td><a href="http://www.landisgyr.com/"><img src="images/clients/landis_gyr.png" alt="Landis & Gyr"></a></td>
			<td><a href="http://www.edmi-meters.com/"><img src="images/clients/edmi.png" alt="EDMI"></a></td>
			<td><a href="http://www.sgcc.com.cn"><img src="images/clients/state_grid.png" alt="China State Grid"></a></td>
			<td><a href="http://www.sensus.com"><img src="images/clients/sensus.png" alt="SENSUS"></a></td>
		</tr>
		<tr>
			<td><a href="http://www.csg.cn"><img src="images/clients/south_grid.png" alt="China Southern Grid"></a></td>
			<td><a href="http://www.itron.com/"><img src="images/clients/itron.png" alt="Itron"></a></td>
			<td><a href="http://www.elster.com"><img src="images/clients/elster.png" alt="ELSTER"></a></td>
			<td><a href="http://www.ge.com"><img src="images/clients/ge.png" alt="GE"></a></td>
		</tr>
	</table>

=======
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
			<li><a href="http://www.landisgyr.com/"><img src="images/clients/landis_gyr.gif" alt="Landis & Gyr"></a></li>
			<li><a href="http://www.itron.com/"><img src="images/clients/itron.gif" alt="Itron"></a></li>
			<li><a href="http://www.edmi-meters.com/"><img src="images/clients/edmi.gif" alt="EDMI"></a></li>
			<li><a href=""><img src="images/clients/sensus.gif" alt="SENSUS"></a></li>
			<li><a href=""><img src="images/clients/elster.gif" alt="ELSTER"></a></li>
			<li><a href="http://www.sgcc.com.cn"><img src="images/clients/state_grid.jpg" alt="China State Grid"></a></li>
			<li><a href="http://www.csg.cn"><img src="images/clients/south_grid.gif" alt="China Southern Grid"></a></li>
			<li><a href="http://www.ge.com"><img src="images/clients/ge.gif" alt="GE"></a></li>
		</ul>
	</div>
>>>>>>> BootStrap
</div><!--End of content-->
<?php include("footer.php") ?>