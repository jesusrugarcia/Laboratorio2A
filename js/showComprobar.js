function seeResultComprobar(){
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			if(xmlhttp.responseText=="SI")
				document.getElementById("comprobarResultado").innerHTML='El correo es valido.';
		
		} else { document.getElementById("comprobarResultado").innerHTML='El correo es NO valido.'; 
}
	}
	xmlhttp.open("POST","ClientVerifyEnrollment.php",true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send("dirCorreo="+document.getElementById('dirCorreo').value);
}