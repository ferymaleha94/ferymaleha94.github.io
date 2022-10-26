<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fm Movie</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- remove 000webhost Banner -->
<script src="/Index_Resources/includes/remove-000webhost-Banner.js"></script>
  </head>

  <body style="color: white; background-color: skyblue;">
    <br><br>
<center>
    <section  style="background-color: black; border: 2px solid white; border-radius: 10px;" class="col-lg-12">
      <div class="container">
        <div class="row">
          
          <div>
           <br>
<h2 style="text-align: center; color: #FF1111; background: silver; border: 2px solid #35FFFF; border-radius: 10px; width: 95%; height: 50px">
Fm Movie</h2>
            <br>

<h6 style="text-align: center; color: skyblue;">Script Ini Punya Fm Movie ©Puma Media </h6>

<h7 style="color: #FF3333;">
Example url: -</h7>
       
<p style="color: red; background: skyblue; border: ; border-radius: 4px; width: 99%;">
https://drive.google.com/file/d/1sBsiVZIW9i-3pbakuLlKV-GhbHSa-yEJ/view?usp=drivesdk
</p>
<br/>

<div id= "ExampleURL"></div>
            <form>
              <div class="form-group">
                <input name="url" type="url" id="embedurl" class="form-control url" placeholder="Paste Google Drive Video URL Here" list="browsers" required/>
<datalist id="browsers">
<option value="https://drive.google.com/file/d/1taiDy6rW8JTGr9PCaP1J0cViDwp48zrO/view?usp=drivesdk">
<option value="https://drive.google.com/file/d/1corMaWA3THPBYel4Dml5vIeDlID2XbGR/view?usp=drivesdk">
<option value="https://drive.google.com/file/d/1E0m12LscebPU_QdbgVd6jHpizGJfPvEm/view?usp=drivesdk">
<option value="https://drive.google.com/file/d/1I33IJLZ5eCsmFdV5bBIjVKpuBr097g16/view?usp=drivesdk">
<option value="https://drive.google.com/file/d/1tWYb2DFmRlFkolNGWz1lKuC4vNNYutyG/view?usp=drivesdk">
<option value="https://drive.google.com/file/d/1wPBqalxanSmSyBPSDtvuDFPOrS6mWqAx/view?usp=drivesdk">
<option value="https://drive.google.com/file/d/1sBsiVZIW9i-3pbakuLlKV-GhbHSa-yEJ/preview">
  </datalist>
              </div>
              <div class="form-group">
                <button name="submit" type="submit" class="btn btn-success" onClick="myFunction()">Play</button>

<button class="btn btn-success" onclick="ResetSrc()">Reset</button>
<script>
function ResetSrc() {
//remove iframe src
var frame = document.getElementById("gdplayer");
frame.src = "about:blank";
//remove search value
document.getElementById('embedurl').value = ""; 
}
</script>

<button class="btn btn-success" onclick="embed()">Embed</button>
<script type="text/javascript">
function embed() {
      var embedurl = document.getElementById("embedurl").value;
       window.parent.location = ("GD-Embed/index.php?url=" + embedurl);
}
</script>

<button  class="btn btn-success" 
onclick="change(value)">Example</button>
              </div>
            </form>

<button class="btn btn-success" onclick="embed()">Get Stream Link ðŸ”—</button>
<script type="text/javascript">
function embed() {
      var embedurl = document.getElementById("embedurl").value;
       window.parent.location = ("./GD-Stream/index.php?url=" + embedurl);
}
</script>

          </div>

          <div class="col-lg-12">
            
            <div class="embed-responsive embed-responsive-16by9">

              <iframe id="gdplayer" style="border: 1px solid #35FFFF;" class="embed-responsive-item" src="" frameborder="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; download; gyroscope; picture-in-picture" allowfullscreen width="100%"></iframe>
<p id="textshow" style="color: black; background: skyblue; text-align: center; border: 2px solid red; border-radius: 10px;"></p>

<p style="color: #FF6666;">Note : - Masukan Url Google Drive Nya</p>
            </div>

          </div>
        </div>
      </div>    
<br>
    </section>
</center>
<br>
  <a style="background-color: #364655;
  color: #35FFFF; border-radius: 5px;" href="https://youtube.com/channel/UC3iaOO2Pnc7NzSLtwCLdPYw">© Design by Ferymaleha <script>document.write(new Date().getFullYear())</script></a>
  <span>â€¢ </span>    
<br><br/>



    <script src="javascript/custom.js" defer></script>
<script>
      function myFunction() {
        document.getElementById("textshow").innerHTML = "Loading...";
      }
  </script>
<script>
         function change(value){
         document.getElementById("embedurl").value= "https://drive.google.com/file/d/1sBsiVZIW9i-3pbakuLlKV-GhbHSa-yEJ/view?usp=drivesdk";
         document.getElementById("ExampleURL").innerHTML= "Usage:- https://drive.google.com/file/d/{YOUR VIDEO ID}/preview";
         }
   </script>
  </body>
</html>


