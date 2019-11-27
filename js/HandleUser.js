 function borrarUsuario(usuario) {
 	var window = confirm('¿Eliminar usuario?');
 	if (window){
  xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange=function(){
if (xmlhttp.readyState==4 && xmlhttp.status==200){
location.reload();
document.getElementById("result").innerHTML=xmlhttp.responseText;
 }
}
xmlhttp.open("POST","../php/BorrarUsuario.php?",true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send("user="+usuario);
  }
}

 function changeBloqueado(usuario) {
 	var window = confirm('¿Bloquear usuario?');
 	if (window){
  xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange=function(){
if (xmlhttp.readyState==4 && xmlhttp.status==200){
location.reload();
document.getElementById("result").innerHTML=xmlhttp.responseText;
 }
}
xmlhttp.open("POST","../php/BloquearUsuario.php?",true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send("user="+usuario);
  }
}