// fetch data via Api URL
async function load() {
    let apiURL = "https://www.googleapis.com/drive/v3/files/<?php echo $Converted1 ?>?q=in%20parents&key=<?php echo $apiKey ?>";
    let obj = null;
    
    try {
        obj = await (await fetch(apiURL)).json();
    } catch(e) {
         // alert("api error : failed to fetch data");
document.getElementById("demo").innerHTML = "api error : failed to fetch data";
    }
    
    // alert(obj.id);
document.getElementById("demo").innerHTML = 
      '<br>id : '+ obj.id + 
      '<br>name : '+ obj.name + 
      '<br>mimeType : '+ obj.mimeType;  
}

load();
