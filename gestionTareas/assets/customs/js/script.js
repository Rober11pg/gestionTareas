document.addEventListener("DOMContentLoaded", function () {
  var nombreInput = document.getElementById("nombre");
  var apellidoInput = document.getElementById("apellido");
  var contrasenaInput = document.getElementById("contrasena");

  nombreInput.addEventListener("input", function () {
    if (this.value.match(/[^a-zA-Z ]/g)) {
      alert("Special characters are not allowed");
    }
    this.value = this.value.replace(/[^a-zA-Z ]/g, "");
  });

  apellidoInput.addEventListener("input", function () {
    if (this.value.match(/[^a-zA-Z ]/g)) {
      alert("Special characters are not allowed");
    }
    this.value = this.value.replace(/[^a-zA-Z ]/g, "");
  });

  contrasenaInput.addEventListener("input", function () {
    if (this.value.length < 5) {
      this.setCustomValidity("Password must be at least 5 characters long");
    } else {
      this.setCustomValidity("");
    }
  });

  nombreInput.addEventListener("blur", function () {
    this.value = this.value.trim();
    this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1);
  });

  apellidoInput.addEventListener("blur", function () {
    this.value = this.value.trim();
    this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1);
  });
});
