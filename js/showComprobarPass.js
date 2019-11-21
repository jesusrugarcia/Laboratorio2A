function seeResultComprobarPass(){
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			if(xmlhttp.responseText=="VALIDA")
				document.getElementById("comprobarResultadoPass").innerHTML=xmlhttp.responseText;
			
		} else { document.getElementById("comprobarResultadoPass").innerHTML=xmlhttp.responseText;
	}
	}
	xmlhttp.open("POST","ClientVerifyPass.php",true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send("pass="+document.getElementById('pass').value);
}