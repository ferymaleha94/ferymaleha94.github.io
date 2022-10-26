<?php
$url = $convertedURL;

function check_remote_video_exists($url) {

    $headers = @get_headers($url);

    return (strpos($headers[0], '200') > 0) ? true : false;
}

if (check_remote_video_exists("$url")) {

    // url exists
// echo "yes available.";

} else {

    // url does not exist
//echo "not available!";
?>

<style>
.message-cont {
 width: 100%;
 height: 100%;
 text-align: center;
 background-color: rgba(0,0,0,0.65);
 position: absolute;
 top: 0;
 bottom: 0;
 left: 0;
 right: 0;
 z-index: 1000;
} 

.message-cont .message {
 font-family: sans-serif;
 max-width: 25em;
 position: relative;
 background-color: #333;
 color: white;
 padding: 0.5em 3em 0.5em 2em;
 border: solid #2196f3 7px;
 margin: 4em auto;
} 

.message-cont .message div.closemsg {
 position: absolute;
 top: 0.2em;
 right: 0.2em;
 font-size: 2em;
 background-color: #2196f3;
 color: white;
 padding: 0.05em 0.2em;
 cursor: pointer;
 font-weight: 600;
}
</style>
<!-- partial:index.partial.html -->
<div id="close" class="message-cont">
  <div class="message">
    <h2>Note : Api Key or User Rate Limit Exceeded,<br><span>Please use another Api key</span> 
    <br><br/>
    <a style="background: red;" href="https://developers.google.com/drive/api/guides/enable-drive-api">How to Create My Own 'Api key'?</a></h2>
    
    <br> <br/>
    <a style="background: red;" href="https://analytify.io/doc/fix-user-rate-limit-exceeded-issue/">how to fix User Rate Limit Exceeded?</a>
    <div id="xToClose" class="closemsg">X</div>
  </div>
</div>
<script>
document.getElementById("xToClose").addEventListener("click", closeMessage);

function closeMessage() {
  document.getElementById("close").style.display = "none";
}
</script>

<?php
}
?>