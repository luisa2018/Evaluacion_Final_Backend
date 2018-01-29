/*
  Creación de una función personalizada para jQuery que detecta cuando se detiene el scroll en la página
*/
$.fn.scrollEnd = function(callback, timeout) {
  $(this).scroll(function(){
    var $this = $(this);
    if ($this.data('scrollTimeout')) {
      clearTimeout($this.data('scrollTimeout'));
    }
    $this.data('scrollTimeout', setTimeout(callback,timeout));
  });
};
/*
  Función que inicializa el elemento Slider
*/

function inicializarSlider(){
  $("#rangoPrecio").ionRangeSlider({
    type: "double",
    grid: false,
    min: 0,
    max: 100000,
    from: 200,
    to: 80000,
    prefix: "$"
  });
}

/*
  Función que reproduce el video de fondo al hacer scroll, y deteiene la reproducción al detener el scroll
*/
function playVideoOnScroll(){
  var ultimoScroll = 0,
      intervalRewind;
  var video = document.getElementById('vidFondo');
  $(window)
    .scroll((event)=>{
      var scrollActual = $(window).scrollTop();
      if (scrollActual > ultimoScroll){
       video.play();
     } else {
        this.rewind(1.0, video, intervalRewind);
      video.play();
     }
     ultimoScroll = scrollActual;
    })
    .scrollEnd(()=>{
      video.pause();
    }, 10)
}

inicializarSlider();
playVideoOnScroll();

/*Funcion que Valida y sube todos los registros existentes*/

$(document).ready(function(){
	$("#mostrarTodos").click(function(){
		$.ajax({
			url:"asignar.php",
			data:{},
			success: function(data){
		    	$(".itemMostrado").remove();
				$(".colContenido").append(data);
			}
		});
	});
	$('select').material_select();
	$("#formulario").submit(function(event){
		var ciudad = $("#selectCiudad").val();
		var Tipo = $("#selectTipo").val();
		var Precio = $("#rangoPrecio").val();
		event.preventDefault();
		$.ajax({
			url:"buscador.php",
			type:"POST",
			data:{ciudad:ciudad, Tipo: Tipo, Precio: Precio}
		}).done(function(data){
			$(".itemMostrado").remove();
			$(".colContenido").append(data);
		})
	})
})


