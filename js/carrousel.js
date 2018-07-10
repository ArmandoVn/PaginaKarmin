
var actual = 0;
var velocidad = 4000;

function mostrar(n){
  var imagenes = document.getElementsByClassName('carrousel-image');
  var puntos = document.getElementsByClassName('point');
  //console.log(imagenes.length);
  for (var i = 0; i < imagenes.length; i++) {
    if (imagenes[i].className.includes("carrousel-image-actual")) {
      imagenes[i].className = imagenes[i].className.replace("actual", " ");
      puntos[i].className = puntos[i].className.replace("point-active"," ")
      break;
    }
  }
  actual = n;
  imagenes[n].className += " carrousel-image-actual";
  puntos[n].className += " point-active";
}

function siguiente(){
  actual++;
  if (actual >= 3) {
    actual = 0;
  }
  mostrar(actual);
}

function anterior(){
  actual--;
  if (actual < 0) {
    actual = 2;
  }
  mostrar(actual);
}

var animation = setInterval("siguiente()", velocidad);

function play(){
  if (animation == null) {
    animation = setInterval("siguiente()", velocidad);
  }
}

function stop(){
  clearInterval(animation);
  animation = null;
}
