const form = document.getElementById('form');
const Jnome = document.getElementById('Jname');
const Pnome = document.getElementById('Pname');
const nascimento = document.getElementById('nascimento');
const idade = document.getElementById('idade');
const altura = document.getElementById('altura');
const nivel = document.getElementById('nivel');
const peso = document.getElementById('peso');
const deslocamento = document.getElementById('deslocamento');
const Pvida = document.getElementById('Pvida');
const Dvida = document.getElementById('Dvida');
const raça = document.getElementById('raça');
const Antecedente = document.getElementById('Antecedente');
const alinhamento = document.getElementById('alinhamento');
const conjuração = document.getElementById('conjuração');
const CDmagias = document.getElementById('CDmagias');
const MODmagia = document.getElementById('MODmagia');
const Sforça = document.getElementById('Sforça');
const Sdestreza = document.getElementById('Sdestreza');
const Sconstituição = document.getElementById('Sconstituição');
const SSabedoria = document.getElementById('SSabedoria');
const SInteligência = document.getElementById('SInteligência');
const SCarisma = document.getElementById('SCarisma');
const armas1 = document.getElementById('armas1');
const armas2 = document.getElementById('armas2');
const armas3 = document.getElementById('armas3');
const armaduras = document.getElementById('armaduras');
const escudo = document.getElementsByName('escudo');
const classe = document.getElementsByName('classe');





function AbrirAba(event , Abaname){
    var i, tabcontent , Abalink;
 // Get all elements with class="tabcontent" and hide them
 tabcontent = document.getElementsByClassName("tabcontent");
 for (i = 0; i < tabcontent.length; i++) {
   tabcontent[i].style.display = "none";
 }

 // Get all elements with class="tablinkSs" and remove the class "active"
 Abalink = document.getElementsByClassName("Abalink");
 for (i = 0; i < Abalink.length; i++) {
    Abalink[i].className = Abalink[i].className.replace(" active", "");
 }

 // Show the current tab, and add an "active" class to the button that opened the tab
 document.getElementById(Abaname).style.display = "block";
 evt.currentTarget.className += " active";
}















form.addEventListener("submit",(event) =>{
    event.preventDefault();
    alert("deu certo viado")
} )

