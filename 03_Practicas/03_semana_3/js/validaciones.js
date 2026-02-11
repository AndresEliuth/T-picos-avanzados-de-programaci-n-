function validarFormulario(){

    let animalSeleccionado = document.querySelector(
        'input[name="animal"]:checked'
    );
    if (!animalSeleccionado){
        alert("Debes seleccionar a tu animal favorito")
        return false;
    }

    let plataformasSeleccionada = document.querySelectorAll(
        'input[name="app[]"]:checked'
    );
    if (plataformasSeleccionada.length===0){
        alert("Debes seleccionar al menos una plataforma")
        return false;
    }

    let edad= document.getElementById("edad").value;

    if (edad===""){
        alert("Debes seleccionar tu rango de edad")
        return false;
    }

    return true;

}