<?php
include ('config.php');
include ('data.php');
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
		<link href=\'' . MOBILE_STYLE_URL .'\' type=\'text/css\' rel=\'stylesheet\'>';
}


function echo_page_body()
{
	echo '
		</head>
		<body>
			<div id=\'page\'>';
	
	echo_top_of_page();
	
	echo_contact_info();
	echo_hours();
	echo_footer();
	echo
		'</div></div></body></html>';
}

function echo_top_of_page()
{
	echo '
	
		<header>
			<a href="http://localhost/nail-temp-custom/"><h1><div id="CN">CN</div><div id="nails_and_spa"> Nails & Spa</h1></a>';
					
	echo '
		</header>';
}

echo_page();
?>