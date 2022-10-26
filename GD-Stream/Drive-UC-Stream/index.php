<?php include("./convert.php");?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <title>Drive-UC | Stream Link</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body style="color: white; background-color: #333333;">
    <br><br>
    <section>
<center>
      <div class="container" style="padding-bottom:10px;">
        <div class="row">
          <div class="col-lg-12">

<h2 style="color:#35FFFF; text-align: center; padding-bottom: 20px;">
Drive-UC | Stream Link
</h2>

<p>Preview</p>
            <div class="embed-responsive embed-responsive-16by9">

              <iframe id="gdplayer" style="border: 2px solid #35FFFF; background: silver;" class="embed-responsive-item" src="<?php echo $convertedURL; ?>" height="100%" width="100%" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<!--
<video id="gdplayer" style="border: 2px solid #35FFFF; background: silver;" class="embed-responsive-item" 
width="<?php echo("$width"); ?>" 
height="<?php echo("$height"); ?>" 
poster="<?php echo("$vidPoster"); ?>" 
<?php echo("$controls"); ?> 
preload="<?php echo("$metadata"); ?>" 
controlsList="<?php echo("$fullscreenSet"); ?>
<?php echo("$downloadSet"); ?>" 
PictureInPicture 
<?php echo("$autoplaySet"); ?> 
<?php echo("$mutedSet"); ?> 
<?php echo("$loopSet"); ?>/>

<source src="<?php echo("$vidSource"); ?>"/>
 Your browser does not support HTML video.
</video>
-->
            </div>

<div id="demo"></div>

          </div>
        </div>
      </div>    
<br/>

<p>Your Stream Link</p>

      <textarea id="embed-code" style="height:100px; width:350px; color:pink; background: black;" readonly><?php echo $convertedURL; ?></textarea>
<br/>
<input class="btn btn-success" type="button" style=" cursor: pointer; padding: 4px;" onclick="copy(); return alert('Code Copied');" value="Copy link"/>

</br>
<br></br>
</center>

    </section>

<script src="../copy-code.js"></script>
  </body>
</html>