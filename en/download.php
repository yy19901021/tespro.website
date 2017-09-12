<?php 
	$title = "Download";
?>
<?php 
	$BaseUrl = "";
	include("../includes/universal.php");
	$CurrentTab = 3;
	include("header.php");
?>
<!--Start of content-->
<div id="content">
    <div id="download-page-title" class="jumbo-title"><!-- Jumbo Title -->
        <div class="PageTitleBrg container">
            <div id="tp-intro" class="row">
              <div class="col-md-7 col-sm-7">
                    <h1><?php echo $title ?></h1>
                    <p><br /><br /><br /><br /><br /><br /></p>
              </div>
              <div class="col-md-4 col-sm-5">
                <!-- <img src="images/banners/reading-meter.png" /> -->
              </div>
            </div>      
        </div>
    </div><!-- ./Jumbo Title -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>TP-USB Optical Probe Driver</h3>
				<p>TP-USB compatible with USB2.0 standard. You can click following link to download the driver and installation guide.</p>
				<p>
					<a class="btn btn-success btn-lg" href="en/download/TP-USB.zip" aria-label="Left Align">
					<span class="glyphicon glyphicon-download" aria-hidden="true">
					Download the USB driver</a>
				</p>
				<h5>Supported OS</h5>
				<ul>
					<li>Microsoft Windows</li>
					<li>Mac OS X</li>
					<li>Linux</li>
					<li>Android</li>
					<li>Windows CE</li>
				</ul>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
</div><!--End of content-->
<?php include("footer.php") ?>