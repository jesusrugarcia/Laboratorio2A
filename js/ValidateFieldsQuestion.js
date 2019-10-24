function ValidateFieldsQuestion(){
	 
    var subm = true;
   var email=$('#correo').val();
	if(email==""){
		alert("Por favor no dejes el correo electronico vacio");
	
		subm= false;

	}
	else if (!(/^[a-zA-Z]*\d{3}\@ikasle\.ehu\.(eus|es)$/.test(email)|/^[a-zA-Z]*\.[a-zA-Z]*\@ehu\.(eus|es)$/.test(email)|/^[a-zA-Z]*\@ehu\.(eus|es)$/.test(email))){
		window.alert("Email incorrecto"); 

		subm= false;
	}

	var enunciado=$('#enunciado').val();
	if(enunciado==""){
		alert("Por favor no dejes el enunciado vacio");
	
		subm= false;
	}
	else if(enunciado.length<10) {
		alert("El enunciado debe tener al menos 10 caracteres");

		subm= false;
	}
	var correcta =$('#correcta').val();
	if(correcta==""){
		alert("Por favor no dejes la respuesta correcta vacia");
	
		subm= false;
	}
	var incorrecta1 =$('#incorrecta1').val();
	if(incorrecta1==""){
		alert("Por favor no dejes la respuesta incorrecta 1 vacia");
	
		subm= false;
	}
	var incorrecta2 =$('#incorrecta2').val();
	if(incorrecta2==""){
		alert("Por favor no dejes la respuesta incorrecta 2 vacia");
	
		subm= false;
	}
	var incorrecta3 =$('#incorrecta3').val();
	if(incorrecta3==""){
		alert("Por favor no dejes la respuesta incorrecta 3 vacia");
	
		rsubm= false;
	}
	var dificultad = $('#dificultad option:selected').val();
	
	var tema=$('#tema').val();
	if (tema==""){
		alert("Por favor de dejes el tema vacio");
	
		subm= false;
	}

if ( subm == true) $('#fquestion').submit();
 }

	

 

 //onsubmit="return ValidateFieldsQuestion()">