<?php 
include("includes/universal.php");
include("includes/getLanguage.php");
function redirectToLang()
{
	$found = false;// set to default value
	//prepare user language array
	$user_languages = array();
	
	$user_languages = get_languages("data");
	
	switch ( $user_languages[0][1] )// get default primary language, the first one in array that is
	{
		case 'zh':
			$location = 'zh/';
			$found = true;
			break;
		default:
			$location = 'en/';
			break;
	}
	if ( $found )
	{
		header("Location: $BaseUrl$location");
	}
	else// make sure you have a default page to send them to
	{
		header("Location: $BaseUrl$location");
	}
}
redirectToLang();
?>