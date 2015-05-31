<!-- ********************* ABRE CONTACTO ********************* -->
	<article class="cont-mensaje">
		<div class="wrapt">
			
			<div class="btn-telefono">
				<span class="icon-telefono"></span>
			</div>
			<div class="mensaje btn-mensaje">
				<header>
					<div class="texto-cabecera-mensaje">
						<span class="icon-mensaje"></span>
						<p>Texto motivador para el mensaje, puede ser cualquier cosa</p>
					</div>
				</header>
				<div class="cuerpo-mensaje">
					<form class="formulario" id="formulariodos">
					<ul>
						<li class="uno blanco"><input type="text" placeholder="Nombre y apellido" id="nombredos"></li>
						<li class="dos blanco"><input type="text" placeholder="Teléfono" id="ciudaddos"></li>
						<li class=" tres blanco"><input type="text" placeholder="E-mail" id="emaildos"></li>
					</ul>
					<ul>
						<li class="cuatro blanco"><input type="text" placeholder="Interes" id="telefonodos"></li>
						<textarea name="" placeholder="¿Cómo podemos ayudarle?" id="mensajedos"></textarea>
						<span class="icon-adjunto"></span><div class="elboton enviar" id="enviardos">Enviar</div>
					</ul>
				</form>
				</div>	
			</div>

<!-- ********************* ABRE SECCIÓN DE REDES ********************* -->
		
			
<!-- ********************* CIERRA SECCIÓN DE REDES ********************* -->
		</div>
	</article>

	<article class="redes">
		<div class="wrapt">
				<header>Siguenos en nuestras redes sociales</header>
				<div class="cuerpo-redes">
					<div>
					<a href=""><section>
							<div class="icon-facebook"></div>
							<span>Facebook</span>
						</section></a>
					<a href=""><section>
							<div class="icon-twitter"></div>
							<span>Twitter</span>
						</section></a>
					<a href=""><section>
							<div class="icon-linkedin"></div>
							<span>Linkedin</span>
						</section></a>
					<a href=""><section>
							<div class="icon-gplus"></div>
							<span>Google plus</span>
						</section></a>
					<a href=""><section>
							<div class="icon-instagram"></div>
							<span>Instagram</span>
						</section></a>
					<a href=""><section>
							<div class="icon-youtube"></div>
							<span>Youtube</span>
						</section></a>
					</div>
				</div>
		</div>
		</article>
<!-- ********************* CIERRA CONTACTO ********************* -->






<!-- ********************* ABRE PIE DE PÁGINA ********************* -->
	<footer>
		<div class="wrapt">
			<div class="logo-blanco">
				<img src="<?php bloginfo(template_directory) ?>/img/logo-nuvoil-blanco.svg" alt="">
			</div>
			<div class="dato-uno">Framboyanes 3303 <br>Ciudad iIndustrial Bruno Pagliali <br> Veracruz, Ver. México</div>
			<div class="dato-dos">
				<div class="tel">+52 (229) 9893770</div>
				<div class="correo">contacto@nuvoil.com</div>
			</div>
			<div class="reservados">nuvoil©2015 Todos los derechos reservados</div>
		</div>
	</footer>
<!-- ********************* CIERRA PIE DE PÁGINA ********************* -->
<!-- ********************* SCRIPTS ********************* -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="<?php bloginfo(template_directory) ?>/js/index.js"></script>
<script src="<?php bloginfo(template_directory) ?>/js/mapa.js"></script>
<?php wp_footer(); ?>

</body>
</html>