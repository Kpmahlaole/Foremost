function calculateTotal(CoverOption){
var total = 0;
var elems = CoverOption.getElementsByTagName('input');
for(var i = 0; i < elems.length; i++){
if((elems[i].type == "radio" || elems[i].type == "checkbox") && elems[i].checked){
total += parseFloat(elems[i].value);
}
}
total = total.toFixed(2)
CoverOption.total.value = "R" + total;
}

function myFunction() {
  alert("I am an alert box!");
}