
var el4=document.getElementById('a4');
var el3=document.getElementById('a3');
var el2=document.getElementById('a2');
var sT=document.getElementById('sTable');
var tT=document.getElementById('tTable');
var fT=document.getElementById('fTable');

el4.addEventListener('click',function(event){
    tT.style.visibility="hidden";
    sT.style.visibility="hidden";
    fT.style.visibility="visible";

})
el3.addEventListener('click',function(event){
    tT.style.visibility="visible";
    sT.style.visibility="hidden";
    fT.style.visibility="hidden";
})
el2.addEventListener('click',function(event){
    tT.style.visibility="hidden";
    fT.style.visibility="hidden";
    sT.style.visibility="visible";
    
})
