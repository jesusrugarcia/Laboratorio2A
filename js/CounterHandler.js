function countIncrease(){
    xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange=function(){
if (xmlhttp.readyState==4 && xmlhttp.status==200){
document.getElementById("totalUsers").innerHTML=xmlhttp.responseText;
 }
}
xmlhttp.open("GET","IncreaseGlobalCounter.php",true);
xmlhttp.send(null);
return;
}

function countDecrease(){
    xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange=function(){
if (xmlhttp.readyState==4 && xmlhttp.status==200){
document.getElementById("totalUsers").innerHTML=xmlhttp.responseText;
 }
}
xmlhttp.open("GET","DecreaseGlobalCounter.php",true);
xmlhttp.send(null);
return;
}
function countUsersTotal(){
    xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange=function(){
if (xmlhttp.readyState==4 && xmlhttp.status==200){
document.getElementById("totalUsers").innerHTML=xmlhttp.responseText;
 }
}
xmlhttp.open("GET","TotalUsersCount.php",true);
xmlhttp.send();
return;
}