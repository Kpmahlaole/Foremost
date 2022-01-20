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
// -->

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()