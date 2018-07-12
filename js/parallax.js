$(document).ready(function(){
  $(window).scroll(function() {
    var barra = $(window).scrollTop() + $('div.line').offset().top;
    //var posicionObjeto = $('img.img-departament').offset();
    // var position = barra * 0.1 /*+ posicionObjeto.top*/;
    //console.log(imagenesDepartamentos.length);
    //var position = barra * 0.1;

    /*var position = ($('#dibujo').offset().top + barra) * 0.1;
    $('#dibujo').css({
      'top':'-' + position + 'px'
    })*/

    if (barra > $('#dibujo').offset().top) {
      $('#dibujo').css({
        'top':'-' + (barra - $('#dibujo').offset().top) * 0.1 + 'px'
      })
    }

    //console.log(barra + " " + $('div.line').offset().top);
    console.log(barra + " " + $('#dibujo2').offset().top);
    if (barra > $('#dibujo2').offset().top) {
      $('#dibujo2').css({
        'top':'-' + (barra - $('#dibujo2').offset().top) * 0.1 + 'px'
      })
    }
  })
})
