function mostrarclasse() {
    const select = document.getElementById("classeDesc");
    const valor = document.getElementById("classeDesc").value;

    const info = document.getElementsByClassName("ContainerClasse");
    info.forEach(style.display = "none");
    
    



    if (valor) {
        document.getElementById(valor).style.display = "block";
    }

}