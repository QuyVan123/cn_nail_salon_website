<?php
/*Originally the data contained within was pure data; however the data would have to be dissected to show different colour text for each paragraph, so now the functions should contain ready to display data */



/* This function is used in header, making it a paragraph will cause issues*/
function echo_phone_number()
{
	echo '(403) 346-0551';
}
function echo_services_info()
{
	echo'
		<p>
		Services info area
		</p>';
}

function echo_hours_info()
{
	echo '
		<p>	
		Walks ins and appointments welcome. <br>
		Monday: 9:30am - 7:00pm <br>
		Tuesday: 9:30am - 7:00pm <br>
		Wednesday: 9:30am - 7:00pm <br>
		Thursday: 9:30am - 7:00pm<br>
		Friday: 9:30am - 7:00pm<br>
		Saturday: 10:00am - 6:00pm<br>
		Sunday: Closed<br>
		</p>';	
}

function echo_location_info()
{
	echo '
		<h3>CN Nails and Spa</h3>
		<p>
		7110 50 Ave <br>
		Red Deer, AB <br>
		</p>';
}


function echo_footer_info()
{
	echo '
		<br><br><br><br><br><br><br><br><br><br><br><br>';
}

?>
