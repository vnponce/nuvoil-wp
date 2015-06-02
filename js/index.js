
$(document).ready(lenguaje);
$(document).ready(navegacion);

$(document).ready(mensaje);
$(document).ready(menuLargo);
$(document).ready(scrollMovil);

$(document).ready(navegacionSlider);

$(document).ready(slider);
$(document).ready(subMenu);



function scrollMovil(){
	if($("html").width()<650){
			
		$(document).on("scroll",function(){
	 	if($(document).scrollTop()>30){
        	$(".cabecera-principal").addClass("cabecera-principal-pequena");
        	$(".submenu-movil").addClass("submenu-arriba");
    	} else{
       		$(".cabecera-principal").removeClass("cabecera-principal-pequena");
       		$(".submenu-movil").removeClass("submenu-arriba");
    }
    });
				
			}
}


function menuLargo(){
	if($("html").width()>650){
	 $(document).on("scroll",function(){
	 	if($(document).scrollTop()>350){
        	$(".cabecera-principal").addClass("cabecera-principal-pequena");
    	} else{
       		$(".cabecera-principal").removeClass("cabecera-principal-pequena");
    }
    });
	 }
}



<!-- MENUS -->

function lenguaje(){
	$(".idioma").click(function(){
		$("body").removeClass("bodyactivo")
		$(".seleccion-lenguaje").addClass("idioma-activo");
		if($("nav").hasClass("nav-activo")){$("nav").removeClass("nav-activo")};
	setTimeout(function() {
		$("body").addClass("bodyactivo")
	}, 10);
	
	})

}

function navegacion(){
	$(".rayita, .menu-texto").click(function(){
		$(".rayita").addClass("desaparece");
		$(".menu-texto").css("display", "none")
		$(".menu-icono").addClass("nav-activo");
		setTimeout(function() {
			$(".cerrar-nav").addClass("cerrar-nav-activo")
		}, 600);
		
		$(".cerrar-nav").click(function(){
			$(".cerrar-nav").removeClass("cerrar-nav-activo")
			setTimeout(function() {
				$(".menu-icono").removeClass("nav-activo");
				setTimeout(function() {
					$(".rayita").removeClass("desaparece");
					$(".menu-texto").css("display", "block")
				}, 1000);
			}, 600);
		})
		

	})

}






function mensaje(){
	$(".mensaje header").click(function(){
		$(".mensaje").addClass("mensaje-activo")

		$(".cuerpo-mensaje").click(function(){
			$(".mensaje").removeClass("mensaje-activo")
		})



	})
}









function navegacionSlider(){
	$(".miniatura-uno").click(function(){
		$(".bloque-gris").addClass("posicion-uno")
		$(".bloque-gris").removeClass("posicion-dos");
		$(".bloque-gris").removeClass("posicion-tres");

		$(".elemento-uno").addClass("elemento-uno-activo")
		$(".elemento-uno").removeClass("elemento-dos-activo");
		$(".elemento-uno").removeClass("elemento-tres-activo");
	})


	$(".miniatura-dos").click(function(){
		$(".bloque-gris").addClass("posicion-dos")
		$(".bloque-gris").removeClass("posicion-uno");
		$(".bloque-gris").removeClass("posicion-tres");

		$(".elemento-uno").removeClass("elemento-uno-activo")
		$(".elemento-uno").addClass("elemento-dos-activo");
		$(".elemento-uno").removeClass("elemento-tres-activo");
	})

	$(".miniatura-tres").click(function(){
		$(".bloque-gris").addClass("posicion-tres")
		$(".bloque-gris").removeClass("posicion-uno");
		$(".bloque-gris").removeClass("posicion-dos");

		$(".elemento-uno").removeClass("elemento-uno-activo")
		$(".elemento-uno").removeClass("elemento-dos-activo");
		$(".elemento-uno").addClass("elemento-tres-activo");
	})
}


function slider(){
	$(".miniatura-uno").click(function(){

		$(".elemento-uno").addClass("visible");
		$(".elemento-dos").removeClass("visible");
		$(".elemento-tres").removeClass("visible");
	})


	$(".miniatura-dos").click(function(){

		$(".elemento-dos").addClass("visible");
		$(".elemento-uno").removeClass("visible");
		$(".elemento-tres").removeClass("visible");


	$(".miniatura-tres").click(function(){

		$(".elemento-tres").addClass("visible");
		$(".elemento-dos").removeClass("visible");
		$(".elemento-uno").removeClass("visible");
	})
	})



}

function subMenu(){
	$(".contenedor-triangulo-desactivo").click(function(){
	$(".submenu-movil").addClass("submenu-movil-activo")
	$(".submenu-movil .triangulito-lenguaje").addClass("triangulito-circulo")
	$(".contenedor-triangulo-desactivo").removeClass("contenedor-triangulo-desactivo")
	$(".contenedor-triangulo").addClass("contenedor-triangulo-activo")
	
	t=setTimeout("cerrarSubMenu()",100);

	
	
})
}

function cerrarSubMenu(){
	$(".contenedor-triangulo").click(function(){
	$(".submenu-movil").removeClass("submenu-movil-activo")
	$(".submenu-movil .triangulito-lenguaje").removeClass("triangulito-circulo")
	$(".contenedor-triangulo-activo").removeClass("contenedor-triangulo-activo")
	$(".contenedor-triangulo").addClass("contenedor-triangulo-desactivo")
	t=setTimeout("subMenu()",100);

	
	
})
}








