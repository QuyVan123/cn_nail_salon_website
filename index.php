<?php

include ('config.php');
include ('data.php');
function mobile_check()
{
	echo '
	<script type="text/javascript">
	<!--
	if (screen.width <= 800) {
	document.location = "' . MOBILE_URL . '";
	}
	//-->
	</script>';
}
function echo_page()
{
	echo'
		<!DOCTYPE html>
		<html lang="en">';
	
	echo_file_header();
	
	
	echo_file_body();
	echo '
		</html>';
	
}

function echo_file_header()
{
	echo '
	<head>
		<title>' . WEBSITE_NAME . '</title>
		<meta charset=\'UTF-8\'>';
		
	echo_ext_files();
	echo '
		</head>';
}

function echo_ext_files()
{

	echo '
		<link href=\'' . GLOBAL_STYLE_URL .'\' type=\'text/css\' rel=\'stylesheet\'>
		
		<link href=\'' . PAGE_HEADER_STYLE_URL .'\' type=\'text/css\' rel=\'stylesheet\'>
		<link href=\'' . CONTENT_STYLE_URL .'\' type=\'text/css\' rel=\'stylesheet\'>
		
		';
	echo '
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="scripts/location_map.js" type="text/javascript"></script>
	<script src="scripts/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script src="scripts/jquery.cycle.lite.js" type="text/javascript"></script>
	<script src="scripts/image_slider_misc.js" type="text/javascript"></script>';
}

function echo_file_body()
{
	echo '
		<body>';
	
	echo_top_of_page();
	echo '
				<div id="rest_of_page">';
	echo_main_image_area();
	echo_services_info_area();
	echo_location_and_hours_info_area();
	echo_footer_info_area();
	echo
		'</div><body>';
}

function echo_top_of_page()
{
		echo '
			<header>
			<a href="' . INDEX_URL . '"><img src="images/CN.png" id="header_logo"></a>';

		echo_phone_number_area();
		echo_user_nav();		
		echo '
			</header>';
}
function echo_user_nav()
{
	echo '
		<nav id="menu">';
		
	echo '<ul>
		<li><a id="nav-item" href="#location_and_hours_info_link">Location</a></li>
		<li><a id="nav-item" href="#location_and_hours_info_link">Hours</a></li>
		<li><a id="nav-item" href="#services_info_link">Services</a></li>';
	echo '</ul></nav>';
}


function echo_main_image_area()
{
	echo '
		<div id="main_image_area">';
	try 
	{   
		$directory = 'images/slideshow1';  	
		echo '
			<div class="myslides">';	
		echo_images($directory);
		echo '
			</div>';
	
		}	
	catch(Exception $e) 
	{
		echo '
			There was an error loading the slideshows. <br />' . $e->getMessage();	
	}
	echo '
		</div>';
}
function echo_images($directory)
{
	foreach ( new DirectoryIterator($directory) as $item ) 
	{			
		if ($item->isFile()) 
		{
			$path = $directory . '/' . $item;	
			echo '<img src="' . $path . '"/>';	
		}
	}	
}
function echo_services_info_area()
{
		
	echo '
		<div  id="services_info" class="h2_area">
		<a class="anchor" id="services_info_link"></a>';
	echo '
		<h2 >Services Info</h2>';
	echo_services_info();
	echo '
		</div>';
}

function echo_location_and_hours_info_area()
{
	echo '
		<div id="location_and_hours_info" class="h2_area">
		<a class="anchor" id="location_and_hours_info_link"></a>';
	echo '
		<h2>Location and Hours</h2>';
	echo '
		<span id="map_canvas">';
	echo '
		</span>';
	echo_location_info();
	echo_hours_info();
	echo'
		</div>';
}
function echo_hours_chart()
{
	
}
function echo_footer_info_area()
{
	echo '
                <div id="footer">';
        /*echo "
		<h2>Footer</h2>";
	*/
	echo_footer_info();
	echo '
		</div>';
}
function echo_phone_number_area()
{
	echo '
		<span id="phone_number_area">';	
	echo_phone_number();
	echo '
		</span>';

}

mobile_check();
echo_page();
?>
