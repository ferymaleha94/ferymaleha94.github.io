$('iframe').hide();
$(document).ready(function(){
  $('form').submit(function(e){
    e.preventDefault();
    let getURL = $('.url').val();
    let newstr1 = getURL.replace("https://drive.google.com/file/d/", "");
    let newstr2 = newstr1.replace("/view?usp=drivesdk", "");
    let newstr3 = newstr2.replace("/view", "");
    let newstr4 = newstr3.replace("/preview", "");
var newURL = ("https://drive.google.com/file/d/" + newstr4 + "/preview");
    
    $('iframe').attr( "src", newURL ).show();
  });
});




