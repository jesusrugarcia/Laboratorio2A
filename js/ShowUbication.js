 function getLocation() {
      if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(savePosition, positionError, {timeout:10000});
      } else {
          //Geolocation is not supported by this browser
      }
  }

  // handle the error here
  function positionError(error) {
      var errorCode = error.code;
      var message = error.message;

     document.getElementById('ubication').innerHTML=message;
  }

  function savePosition(position) {
  xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange=function(){
if (xmlhttp.readyState==4 && xmlhttp.status==200){
document.getElementById("ubication").innerHTML=xmlhttp.responseText;
 }
}
xmlhttp.open("POST","../php/Cordinates.php?",true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send("lat="+position.coords.latitude+"&lng="+position.coords.longitude);
  }