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
	echo_file_header();
	
	
	echo_page_body();
	
}

function echo_file_header()
{
	echo'
		<!DOCTYPE html>
		<html lang="en">
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
		<link href=\'' . STYLE_URL .'\' type=\'text/css\' rel=\'stylesheet\'>';
	echo '
	<script src="scripts/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script src="scripts/jquery.cycle.lite.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$(".myslides").cycle({
			fit: 1, timeout: 8000
		});			
	});

	</script>';
}


function echo_page_body()
{
	echo '
		</head>
		<body>
			<div id=\'page\'>';
	
	echo_top_of_page();
	echo '
	<div id="rest_of_page">';
	echo_slider();
	echo_hours();
	echo_location();
	echo_contact_info();
	echo_footer();
	echo
		'</div></div></div></body></html>';
}

function echo_top_of_page()
{
	echo '
	
		<header>
			<a href="' . INDEX_URL . '"><img src="images/CN.png" id="header_logo"></a>';

			
	echo_user_nav();		
	echo '
		</header>';
}
function echo_user_nav()
{
	echo '
		<nav id="menu">';
		
	echo '<ul>
	
	
		<li><a id="nav-item" href="#hours_info_link">Hours</a></li>
		<li><a id="nav-item" href="#location_info_link">Location</a></li>
		<li><a id="nav-item" href="#contact_info_link">Contact</a></li>';
	echo '</ul></nav>';
}


function echo_slider()
{
	echo '
		<div id="slider">';
	try 
	{   
		$directory = 'images/slideshow1';  	
		echo '
		<div class="myslides">';	
		getImages($directory);
		echo '
		</div>';
	

	}	
	catch(Exception $e) 
	{
		echo '
		There was an error loading the slideshows. <br />' . $e->getMessage();	
	}

	
		
	
}

function getImages($directory)
	{
		foreach ( new DirectoryIterator($directory) as $item ) {			
			if ($item->isFile()) {
				$path = $directory . '/' . $item;	
				echo '<img src="' . $path . '"/>';	
			}
		}	
	}


mobile_check();
echo_page();
?>
