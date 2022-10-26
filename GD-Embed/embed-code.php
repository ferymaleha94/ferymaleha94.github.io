<?php include("convert.php");?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <title>Drive-Embed Code</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

<!-- remove 000webhost Banner -->
<script src="/Index_Resources/includes/remove-000webhost-Banner.js"></script>
  </head>
  <body style="color: white; background-color: #333333;">
    <br><br>
    <section>
<center>
      <div class="container" style="padding-bottom:10px;">
        <div class="row">
          <div class="col-lg-12">

<h2 style="color:#35FFFF; text-align: center; padding-bottom: 20px;">
Drive-Embed Code
</h2>

<form name="form" action="" method="get">
  <input type="url" name="url" id="url" value="<?php echo $convertedURL; ?>" placeholder="Enter Google Drive Video URL" required>
 <input class="btn btn-success" style="text-align: center; cursor: pointer; padding:2px;" name="submit" type="submit" value="Generate"/>
</form>

<br/>
<p>Preview</p>
            <div class="embed-responsive embed-responsive-16by9">

              <iframe id="gdplayer" style="border: 2px solid #35FFFF;" class="embed-responsive-item" src="<?php echo $convertedURL; ?>" height="100%" width="100%" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>


          </div>
        </div>
      </div>    
<br/>

<p>Embed code</p>

      <textarea id="embed-code" style="height:100px; width:350px; color:pink; background: black;" readonly>
<iframe id="gdplayer" style="border: 1px solid #35FFFF;" class="embed-responsive-item" src="<?php echo $convertedURL; ?>" height="100%" width="100%" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </textarea>
<br/>
<input class="btn btn-success" type="button" style=" cursor: pointer; padding: 4px;" onclick="copy(); return alert('Code Copied');" value="Copy code"/>

</br>
<br></br>
</center>

    </section>

<script src="copy-code.js"></script>
  </body>
</html>