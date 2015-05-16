
$(document).ready(lenguaje);
$(document).ready(navegacion);
$(document).ready(cerrar);

$(document).ready(mensaje);
$(document).ready(menuLargo);

$(document).ready(navegacionSlider)




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
	$(".menu-icono").click(function(){
		$("body").removeClass("bodyactivo")
		$("nav").addClass("nav-activo");
		if($(".seleccion-lenguaje").hasClass("idioma-activo")){$(".seleccion-lenguaje").removeClass("idioma-activo")};
		setTimeout(function() {
			$("body").addClass("bodyactivo")
		}, 10);

	})

}

function cerrar(){
	$("body,html").click(function(){
			if($("body").hasClass("bodyactivo")){$("nav").removeClass("nav-activo"),$(".seleccion-lenguaje").removeClass("idioma-activo"), $("body").removeClass("bodyactivo")};

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





function menuLargo(){
	 
	 $(document).on("scroll",function(){
	 	if($(document).scrollTop()>350){
        	$(".cabecera-principal").addClass("cabecera-principal-pequena");
    	} else{
       		$(".cabecera-principal").removeClass("cabecera-principal-pequena");
    }
    });
}




function navegacionSlider(){
	$(".miniatura-uno").click(function(){
		$(".bloque-gris").addClass("posicion-uno")
		$(".bloque-gris").removeClass("posicion-dos");
		$(".bloque-gris").removeClass("posicion-tres");
	})


	$(".miniatura-dos").click(function(){
		$(".bloque-gris").addClass("posicion-dos")
		$(".bloque-gris").removeClass("posicion-uno");
		$(".bloque-gris").removeClass("posicion-tres");
	})

	$(".miniatura-tres").click(function(){
		$(".bloque-gris").addClass("posicion-tres")
		$(".bloque-gris").removeClass("posicion-uno");
		$(".bloque-gris").removeClass("posicion-dos");
	})
}







