 //Copy Text Value of Textarea
 function copy() {
 let textarea = document.getElementById("embed-code");
 textarea.select();
 document.execCommand("copy");
 }