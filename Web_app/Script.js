var currentTab = 0;
showTab(currentTab);

function showTab(n){
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";

    if (n == 0){
        document.getElementById("predchozi").style.display = "none";
    } else{
        document.getElementById("predchozi").style.display = "inline";
    }
    if(n == (x.length - 1)){
        document.getElementById("dalsi").innerHTML = "Přihlásit"
    } else{
        document.getElementById("dalsi").innerHTML = "Další"
    }

    fixStepIndicator(n);
}

function dalsi(n){
   var x = document.getElementsByClassName("tab");
   if (n == 1 && !validateform()) return false;
   x[currentTab].style.display = "none";
   currentTab = currentTab + n;
   if (currentTab <= x.length) {
       document.getElementById("regForm").submit();
       return false;
   }
   showTab(currentTab);
}

function validateform(n){
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByClassName("input");
    for (i = 0 ; i < y.length; i++){
    if (y[i].value == ""){
        y[i].className += "neplatné";

        valid = false;;
        } 
    }
    if (valid) {
        document.getElementsByClassName("krok")[currentTab].className += " dokoncit";
    }
    return valid;
}

function fixStepIndicator(n){
    var i, x = document.getElementsByClassName("krok");
    for (i = 0; i<x.length; i++){
        x[i].className = x[i].className.replace (" active", " ");
    }
    x[n].className += " active";
}