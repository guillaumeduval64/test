$(document).ready(function() {

     var div = document.getElementById('currentMatch');
    alert(div);
if (div.innerText > 32) {
    newColor = "green";
} else {
    newColor = "red";
}
    div.style.color = newColor;


});



