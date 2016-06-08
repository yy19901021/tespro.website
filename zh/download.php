<?php 
	$title = "下载";
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
                <h3>泰易TP-USB光电头驱动程序</h3>
				<p>珠海泰易对本公司生产的所有USB接口产品提供USB驱动支持，并支持所有主流操作系统。</p>
				<ul>
					<li><a href="zh/download/TP-USB-Windows.zip">下载 Windows 驱动程序</a></li>
					<li><a href="zh/download/TP-USB-MacOSX.zip">下载 Mac OS X 驱动程序</a></li>
					<li><a href="zh/download/TP-USB-Linux.zip">下载 Linux 驱动程序</a></li>
					<li><a href="zh/download/TP-USB-WinCE.zip">下载 Windows CE 驱动程序</a></li>
					<li><a href="zh/download/TP-USB-Android.zip">下载 Android 驱动程序</a></li>
				</ul>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
</div><!--End of content-->
<?php include("footer.php") ?>