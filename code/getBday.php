<?php

// Include the library
include('simple_html_dom.php');


$mon = strtolower(date('F', strtotime($_GET["bday"])));
$day = date('d', strtotime($_GET["bday"]));

if($day < 10)
	$day = ltrim($day, '0');


$bday = $mon . $day . ".html";

$base = "http://www.famousbirthdays.com/" . $bday;

echo "Celebs Birthday! NEW ";

echo "it should work now...";



/*
// Retrieve the DOM from a given URL
$html = file_get_html($url);

// Find all SPAN tags that have a class of "myClass"
foreach($html->find('a.celeb') as $e)
  	echo $e->outertext . '<br>';
  */	
 
 
 
 //$base = 'https://play.google.com/store/apps';

$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_URL, $base);
curl_setopt($curl, CURLOPT_REFERER, $base);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$str = curl_exec($curl);
curl_close($curl);

// Create a DOM object
$html_base = new simple_html_dom();
// Load HTML from a string
$html_base->load($str);

//get all category links
foreach($html_base->find('a.celeb') as $element) {
    //echo "<pre>";
    //print_r( $element->href );
	echo $element->outertext . '<br>'; 
    //echo "</pre>";
}

$html_base->clear(); 
unset($html_base);s
 
 
//echo "ok!!!!!";

?>

