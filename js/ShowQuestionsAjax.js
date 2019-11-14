function verPreguntas(){
    xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange=function(){
if (xmlhttp.readyState==4 && xmlhttp.status==200){
document.getElementById("QuestionSpace").innerHTML=xmlhttp.responseText;
 }
}
xmlhttp.open("GET","ShowXMLQuestions.php",true);
xmlhttp.send(null);
return;
}