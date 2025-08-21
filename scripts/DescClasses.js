function mostrarclasse() {
    const select = document.getElementById("classeDesc");
    const valor = document.getElementById("classeDesc").value;

    const info = document.getElementsByClassName("ContainerClasse");
    
    for (let i = 0; i < info.length; i++) {
        info[i].style.display = "none";
    }





    if (valor) {
        document.getElementById(valor).style.display = "block";
    }

}