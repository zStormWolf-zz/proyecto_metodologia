window.onload = iniciar();

function iniciar(){
    var btnIngresar = document.getElementById("btnIngresar");
    btnIngresar.addEventListener("click", clickBtnIngresar);
    
}

function clickBtnIngresar(){
    window.open("registrar.php");
}