<?php 
	$title = "Tespro: 404 Page Not Found";
	$BaseUrl = "";
	$location = "";
	include("../includes/universal.php");
	include("../includes/getLanguage.php");
	
	
	$found = false;// set to default value
	//prepare user language array
	$user_languages = array();
	
	$user_languages = get_languages("data");
	
	switch ( $user_languages[0][1] )// get default primary language, the first one in array that is
	{
		case 'zh':
			$location = 'zh';
			$found = true;
			break;
		default:
			$location = "en";
			break;
	}
	
	// find out the domain:
	// $BaseUrl = $BaseUrl . $location;
	include("../" . $location . "/SystemText.php");
	include("../" . $location . "/header.php");
	?>
<div id="Content" class="Error">
<h1><?php echo $TxtFileNotFoundTitle ?></h1>
<p><?php echo $TxtFileNotFoundMsg ?></p>
<?php
	if($location == 'zh'){
?>
<form action="http://www.google.com/cse" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="013475131374777362661:lxbd3h_q7gm" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" size="31" class="TallBox WideBox" />
    <input type="submit" name="sa" class="TallButton" value="<?php echo $TxtSearch ?>" />
  </div>
</form>
<?php
	}
	else{
?>
<form action="http://www.google.com/cse" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="013475131374777362661:lxbd3h_q7gm" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" size="31" class="TallBox WideBox" />
    <input type="submit" name="sa" class="TallButton" value="<?php echo $TxtSearch ?>" />
  </div>
</form>
<?php
	}
	include("../" . $location . "/footer.php");
?>

