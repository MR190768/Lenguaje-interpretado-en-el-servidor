

checkbox=document.getElementById("hextrasi");
inNumeroHoras=document.getElementById("numhorasex");
inPagohora=document.getElementById("pagohextra");

checkbox.addEventListener("change",function(){
    if(checkbox.checked==true){
        inNumeroHoras.disabled=false;
        inPagohora.disabled=false;
    }
    else{
        inNumeroHoras.disabled=true;
        inPagohora.disabled=true;
    }
})
