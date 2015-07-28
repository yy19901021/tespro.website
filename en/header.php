<?php
	$CorpName = "Tespro Electronics";
	if ($title){
		$windowTitle = $title .  " - " . $CorpName;
	}
	else{
		$title = $CorpName;
	}
	$siteKw = "optical probe,optical head,scanning probe,scanning head,meter communication,power measurement, AMR, meter test, meter reading, landys+gyr,IEC 61007,IEC standard,ANSI standard,smart metering,IEC 1107,optical ports,ANSI C12.18,meter parameterization,ferraris meter,solid-state meter,faradized meter,static meter,Meter Communication Port";
	$siteDesp = "Tespro Electronics Co.,Ltd is a professional supplier in power metering fields, providing testing instruments and equipment for meter production line. Tespro is also engaged in providing manufacturers and power utilities with supporting parts and communication accessories for meter application and AMR system.";
?>

<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="<?php echo $siteKw ?>" />
  <meta name="description" content="<?php echo $siteDesp ?>" />

<?php
	// 开发环境中不调用Google Analytics
	if ($BaseUrl == $LiveBaseUrl){
?>
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("UA-293814-3");
	pageTracker._trackPageview();
	} catch(err) {}</script>
<?php
	}
?>
	
	
	<base href="<?php echo $BaseUrl ?>" />
	
	<!-- Bootstrap -->
	
	<!-- Latest compiled and minified CSS -->
    <link href="css/tespro.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- /Bootstrap -->

	<title>
		<?php echo $windowTitle; ?>
	</title>
	
</head>
<body>
<div class="navbar-container">
		<nav class="navbar navbar-inverse" role="navigation">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="en/"><img src="images/logo_en.gif" alt="Tespro Electronics" /></a>
		    </div>
		
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li <?php echo $CurrentTab == 0 ? $CurrentTabString : "" ;?>><a href="en/">Home</a></li>
						<li <?php echo $CurrentTab == 1 ? $CurrentTabString : "" ;?>><a href="en/products.php">Products</a></li>
		        <li <?php echo $CurrentTab == 2 ? $CurrentTabString : "" ;?>><a href="en/clients.php">Customers</a></li>
		        <li <?php echo $CurrentTab == 3 ? $CurrentTabString : "" ;?>><a href="en/download.php">Download</a></li>
		        <li <?php echo $CurrentTab == 4 ? $CurrentTabString : "" ;?>><a href="en/contact.php">Contacts Us</a></li>
		      </ul>
		      <!--
		      <form class="navbar-form navbar-left" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Submit</button>
		      </form>
		      -->
		      <ul class="nav navbar-nav navbar-right">
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="en/">English</a></li>
		            <li><a href="zh/">Chinese</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
</div>