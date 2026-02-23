function validarFormulario() {

    let mensaje = document.getElementById("mensajeErrror");
    mensaje.textContent = ""; // limpiar mensaje

    let nombre = document.getElementById("nombre").value.trim();
    let correo = document.getElementById("correo").value.trim();
    let edad   = document.getElementById("edad").value.trim();
    let fecha  = document.getElementById("fecha").value;
    let area   = document.getElementById("area").value;

    if (nombre === "") {
        mensaje.textContent = "El nombre es obligatorio";
        return false;
    }

    if (correo === "") {
        mensaje.textContent = "El correo es obligatorio";
        return false;
    }

    if (!correo.includes("@")) {
        mensaje.textContent = "El correo no es válido";
        return false;
    }

    if (edad === "" || isNaN(edad) || edad <= 0) {
        mensaje.textContent = "Ingresa una edad válida";
        return false;
    }

    if (fecha === "") {
        mensaje.textContent = "Selecciona una fecha de ingreso";
        return false;
    }

    if (area === "") {
        mensaje.textContent = "Selecciona un área";
        return false;
    }

    return true;
}