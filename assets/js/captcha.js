    window.onload = function() {
    var recaptcha = document.forms["solucoesFormulario"]["g-recaptcha-response"];
    recaptcha.required = true;
    recaptcha.oninvalid = function(e) {
    // fazer algo, no caso to dando um alert
    alert("Preencha todos os dados!");
      }
  }
