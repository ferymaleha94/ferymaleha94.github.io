<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <title>Drive-Embed Code Generator</title>
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

<h2 style="color:#35FFFF; text-align: center; padding-bottom: 0px;">
Drive-Embed Code Generator
</h2>

            <div style="border:1px solid #35FFFF; padding-top: 50px;">

<form name="form" action="embed-code.php" method="get">
<p style="color: white; background: ;">Enter Google Drive Video URL:-</p>
  <input type="url" name="url" id="url" value="<?php echo $_GET['url']; ?>" placeholder="https://drive.google.com/file/d/1sBsiVZIW9i-3pbakuLlKV-GhbHSa-yEJ/preview" required>
 <input class="btn btn-success" style="padding: 3px; text-align: center; cursor: pointer;" name="submit" type="submit" value="Generate"/>
</form>
<br/><br/><br/>
            </div>


          </div>
        </div>
      </div>    
</center>

    </section>

  </body>
</html>