<?php
 error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <title>Drive-Stream Link Generator</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<!-- remove 000webhost Banner -->
<!-- <script src="/Index_Resources/includes/remove-000webhost-Banner.js"></script> -->
  </head>
  <body style="color: white; background-color: #333333;">
    <br><br>
    <section>
<center>
      <div class="container" style="padding-bottom:10px;">
        <div class="row">
          <div class="col-lg-12">

<h2 style="color:#35FFFF; text-align: center; padding-bottom: 0px;">

</h2>

            <div style="border:1px solid #35FFFF; padding-top: 50px;">

<form name="form" action="#" method="get">

<p style="color: white; background: ;">Google Drive Video URL-</p>
  <input type="url" name="url" id="url" value="<?php echo $_GET['url']; ?>" placeholder="https://drive.google.com/file/d/1sBsiVZIW9i-3pbakuLlKV-GhbHSa-yEJ/preview" required>
<br>
<input class="btn btn-success" style="margin-top: 50px; padding: 5px; text-align: center; cursor: pointer;" name="submit" type="submit" formaction="./Drive-UC-Stream/index.php" value="Stream via Drive UC [No Limits]"/>

<br/>
<br/>

<p style="color: white; background: ;">Google Drive Api key-</p>
  <input type="text" name="apikey" list="apikeys" value="" placeholder="AIzaSyDJk0K7YHIt-xbuOIbVFNkn6mE********" >
<datalist id="apikeys">
  <option value="AIzaSyDJk0K7YHIt-xbuOIbVFNkn6mEuLecqrg8">
</datalist>
</br>



<input class="btn btn-success" style="margin-top: 50px; padding: 5px; text-align: center; cursor: pointer;" name="submit" type="submit" formaction="./Drive-Api-Stream/index.php" value="Stream via Google Drive Api"/>
</form>
<br/><br/>
            </div>


          </div>
        </div>
      </div>    
</center>

    </section>
<br><br>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

</style>

<a class="open-button" href="https://support.google.com/googleapi/answer/6158862?hl=en">How to Create My Own 'Api key'?</a>


  </body>
</html>