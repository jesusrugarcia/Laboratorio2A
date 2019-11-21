function seeResultPreguntaId(){
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
	document.getElementById("comprobarResultadoPregunta").innerHTML=xmlhttp.responseText;
	} else { document.getElementById("comprobarResultadoPregunta").innerHTML='Error';
	}}
	xmlhttp.open("POST","ClientGetQuestion.php",true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send("clave="+document.getElementById('clave').value);
}