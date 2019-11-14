function countTotalQuestions(str){
    xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange=function(){
if (xmlhttp.readyState==4 && xmlhttp.status==200){
document.getElementById("totalQuestions").innerHTML=xmlhttp.responseText;
 }
}
xmlhttp.open("GET","TotalQuestions.php?email="+str,true);
xmlhttp.send();
return;
}