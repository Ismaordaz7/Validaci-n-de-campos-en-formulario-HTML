function validateForm() {
    var user = document.getElementById("user").value;
    var password = document.getElementById("password").value;
    var edad = document.getElementById("edad").value;

    if (user === "" || password === "" || edad === "") {
        alert("Todos los campos deben estar llenos.");
        return false;
    }

    if (isNaN(edad) || edad < 18) {
        alert("La edad debe ser un número y el usuario debe ser mayor de edad (18 años o más).");
        return false;
    }

    return true;
}
