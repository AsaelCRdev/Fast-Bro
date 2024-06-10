
// si en algun momento necesito agregar mas productos o modificar algun boton entro cambiar valor y listo 
var result_Total= 0;

var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var btn_2 = document.getElementById("myBtn_2");

var btn_3 = document.getElementById("myBtn_3");

var btn_4 = document.getElementById("myBtn_4");

var btn2 = document.getElementById("myBtn2");

var btn3 = document.getElementById("myBtn3");

var span = document.getElementsByClassName("close")[0];

var Tocino = document.getElementById("Tocino_Burguer");

var Carne = document.getElementById("Hamburguesa_de_Carne");

var Smash = document.getElementById("Smash-Burguer");

var Papas = document.getElementById("Papas_Fritas");

var compra = document.getElementById('compra')

var clicks = 0;

var valor = 0;

let id;

var tocino_Burguer = 0;

var burguer_Carne = 0;

var smash_Burguer = 0;

var papas_fritas = 0;





btn.onclick = function() {
  modal.style.display = "block";
  id = cambiar_ID(1);
  cambiar_Valor(10);
}

btn_2.onclick = function() {
  modal.style.display = "block";
  id = cambiar_ID(2);
  cambiar_Valor(7.5);
}

btn_3.onclick = function() {
  modal.style.display = "block";
  id = cambiar_ID(3);
  cambiar_Valor(14);
}

btn_4.onclick = function() {
  modal.style.display = "block";
  id = cambiar_ID(4);
  cambiar_Valor(3);
}

btn2.addEventListener("click", function() {
  clicks++;
  pedido.innerHTML = "El total de productos comprados es : " + clicks;
  result_Total += valor;
  compra.value =  result_Total;
  if(id == 1){
    tocino_Burguer++;
    Tocino.value = tocino_Burguer
  }
  else if (id == 2){
    burguer_Carne++;
    Carne.value = burguer_Carne
  }
  else if (id == 3){
    smash_Burguer++;
    Smash.value = smash_Burguer
  }
  else if (id == 4){
    papas_fritas++;
    Papas.value = papas_fritas;
  }
});


btn3.addEventListener("click", function() {
  if (clicks > 0) {   
  if ((id == 1) && (tocino_Burguer > 0)) {
    clicks--;
    pedido.innerHTML = "El total de productos comprados es : " + clicks;
    tocino_Burguer--;
    Tocino.value = tocino_Burguer
    result_Total -= valor;
    result_Total = Math.max(0, result_Total); 
    compra.value = result_Total;
  }
  else if((id == 2) && (burguer_Carne > 0)) {
    clicks--;
    pedido.innerHTML = "El total de productos comprados es : " + clicks;
    burguer_Carne--;
    Carne.value = burguer_Carne
    result_Total -= valor;
    result_Total = Math.max(0, result_Total); 
    compra.value = result_Total;
  }
  else if((id == 3) && (smash_Burguer > 0)) {
    clicks--;
    pedido.innerHTML = "El total de productos comprados es : " + clicks;
    smash_Burguer--;
    Smash.value = smash_Burguer
    result_Total -= valor;
    result_Total = Math.max(0, result_Total); 
    compra.value = result_Total;
  }
  else if((id == 4) && (papas_fritas > 0)) {
    clicks--;
    pedido.innerHTML = "El total de productos comprados es : " + clicks;
    papas_fritas--;
    Papas.value = papas_fritas;
    result_Total -= valor;
    result_Total = Math.max(0, result_Total); 
    compra.value = result_Total;
  }
  }
});

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function cambiar_Valor(Valor_producto) {
  valor = Valor_producto;
}
function cambiar_ID(id_producto) {
  id = id_producto;
  return id;
}

