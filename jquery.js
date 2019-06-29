var hoodie=0;
var perfume=0;
var marvel=0;
var total=0;
function addfunction(i){
  var v = document.getElementsByClassName("test")[i].id;
  if (v == "hoodie"){
    hoodie+=1;
    document.getElementById("demo1").innerHTML = hoodie;
  }   
  if (v == "perfume"){
    perfume+=1;
    document.getElementById("demo2").innerHTML = perfume;     
  }
  if (v == "marvel"){
    marvel+=1;
    document.getElementById("demo3").innerHTML = marvel;
  }
  totalfunction();
}
function deletefunction(i){
  var a = document.getElementsByClassName("test")[i].id;
  if ((a == "hoodie") && (hoodie > 0)){
    hoodie-=1;
    document.getElementById("demo1").innerHTML = hoodie;
  }
  if ((a == "perfume") && (perfume > 0)){
    perfume-=1;
    document.getElementById("demo2").innerHTML = perfume;
  }
  if ((a == "marvel") && (marvel > 0)){
    marvel-=1
    document.getElementById("demo3").innerHTML = marvel;
   }
   totalfunction();
}
function totalfunction(){
  total = hoodie*1200 + perfume*2000 + marvel*1700;
  document.getElementById("demo4").innerHTML=total;
}