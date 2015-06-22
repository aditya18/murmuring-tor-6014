<?php

// Include the library
include('simple_html_dom.php');


$mon = strtolower(date('F', strtotime($_GET["bday"])));
$day = date('d', strtotime($_GET["bday"]));

if($day < 10)
	$day = ltrim($day, '0');


$bday = $mon . $day . ".html";

$url = "http://www.famousbirthdays.com/" . $bday;

echo "Celebs Birthday! "	;

// Retrieve the DOM from a given URL
$html = file_get_html($url);

// Find all SPAN tags that have a class of "myClass"
foreach($html->find('a.celeb') as $e)
  	echo $e->outertext . '<br>';
  	
 

//echo "ok!!!!!";

?>
