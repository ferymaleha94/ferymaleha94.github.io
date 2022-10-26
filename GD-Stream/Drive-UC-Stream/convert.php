<?php 
error_reporting(0);

 $videoURL = $_GET['url'];

$url = "$videoURL";
//URL String Replace
$search1 = array("https://drive.google.com/file/d/", "/view?usp=drivesdk", "/view", "/preview");
$replace1 = array("", "", "", "");
$string1 = "$url";
//replace
$Converted1 = (str_replace($search1, $replace1, $string1));
//Converted URL
$url = $Converted1;

$convertedURL = "https://drive.google.com/uc?export=watch&confirm=yTib&id=" . $Converted1;

?>