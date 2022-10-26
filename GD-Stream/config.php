<?php
error_reporting(0);

$vidSource = $convertedURL;
$vidPoster = $_GET['vidPoster'];

$preload = $_GET['preload'];
$default_preload = "metadata";
!isset($preload) && $preload = "$default_preload";

if($preload === auto)
{
     $preload_autoSet = "selected";
}else {
$preload_autoSet = "";
}

if($preload === metadata)
{
     $preload_metadataSet = "selected";
}else {
$preload_metadataSet = "";
}

if($preload === none)
{
     $preload_noneSet = "selected";
}else {
$preload_noneSet = "";
}


$controls = $_GET['controls'];
$default_controls = "controls";
!isset($controls) && $controls = "$default_controls";

if($controls === controls)
{
     $controls_YesSet = "selected";
}else {
$controls_YesSet = "";
}

if($controls === nocontrols)
{
     $controls_NoSet = "selected";
}else {
$controls_NoSet = "";
}


$autoplay = $_GET['autoplay'];
!isset($autoplay) && $autoplay = "yes";
if($autoplay === yes)
{
    $checked1 = "checked";
     $autoplaySet = "autoplay";
}else if($autoplay === no){
$checked1 = "";
$autoplaySet = "";
}


$download = $_GET['download'];
!isset($download) && $download = "yes";
if($download === yes)
{
    $checked2 = "checked";
    $downloadSet = "download";
}else if($download === no){
$checked2 = "";
$downloadSet = "nodownload";
$Download_disabled = "alert('Download disabled!'); return false; ";
}


$muted = $_GET['muted'];
!isset($muted) && $muted = "no";
if($muted === yes)
{
    $checked3 = "checked";
    $mutedSet = "muted";
}else if($muted === no){
$checked3 = "";
$mutedSet = "";
}


$fullscreen = $_GET['fullscreen'];
!isset($fullscreen) && $fullscreen = "yes";
if($fullscreen === yes)
{
    $checked4 = "checked";
    $fullscreenSet = "fullscreen";
}else if($fullscreen === no){
$checked4 = "";
$fullscreenSet = "nofullscreen";
}

$loop = $_GET['loop'];
!isset($loop) && $loop = "no";
if($loop === yes)
{
    $checked5 = "checked";
    $loopSet = "loop";
}else if($loop === no){
$checked5 = "";
$loopSet = "";
}

$width = $_GET['width'];
$default_width = "100%";
!isset($width) && $width = "$default_width";

$height = $_GET['height'];
$default_height = "auto";
!isset($height) && $height = "$default_height";


?>




