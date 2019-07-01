<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="description" content="Crea tu propio avatar de 8 bits" />
		<title>Avatar 8 bits</title>
		
		<!-- Utilizo el viewport tag para que el navegador utilice la escala que deseo -->
		<meta name="viewport" content="width=device-width" />
		
		<!-- css media queries para navegadores anteriores -->
		<!--[if lt IE 9]>
			<script src="scripts/css3-mediaqueries.js"></script>
		<![endif]-->
		
		<!-- html5 para IE menores al 9 -->
		<!--[if lt IE 9]>
			<script src="scripts/html5shiv.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="sgicon.ico" type="image/x-icon" />
<!-- GA -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2217996-7', 'soulgamers.com.ar');
  ga('send', 'pageview');

</script>
<!-- Fin GA -->
	</head>
	<body>
		<header>
			<h1>Creando tu propio avatar</h1>
		</header>

		<div id="container">
			<aside id="visual">
				<canvas id="miCanvas" width="117" height="153">
 					<span>Tu explorador no acepta canvas</span>
				</canvas>
				<p>Nombre imagen</p> <input type="text" id="Nombre_Avatar" name="Nombre" value="Avatar_8bits" /><br />
				<a href="#" onClick="guardar(document.getElementById('Nombre_Avatar').value)">Guardar</a>
				<a href="#" onClick="borrar()">Borrar</a>
			</aside>

			<section id="principal">
				<div>
					<input id="opc-1" name="acordeon" type="radio" checked>
						<label for="opc-1" class="curvatura-up">Cabezas</label>
						<article class="opc-estilo">
							<?php
                                $contador = 1;
                                foreach (glob("images/skin/*.png") as $nombre_archivo) {
                                    echo '<img src="'.$nombre_archivo.'" alt="Cabeza '.$contador++.'" onClick="setImagen(0, this.src)" />'."\n"; 
                                }
                            ?>							
							<img src="images/null.png" alt="Eliminar" onClick="setImagen(0, null)" />
						</article>
				</div>

				<div>
					<input id="opc-2" name="acordeon" type="radio">
						<label for="opc-2">Cabello</label>
						<article class="opc-estilo">
							<?php
                                $contador = 1;
                                foreach (glob("images/hair/*.png") as $nombre_archivo) {
                                    echo '<img src="'.$nombre_archivo.'" alt="Cabello '.$contador++.'" onClick="setImagen(1, this.src)" />'."\n"; 
                                }
                            ?>							
							<img src="images/null.png" alt="Eliminar" onClick="setImagen(1, null)" />
						</article>
				</div>

				<div>
					<input id="opc-3" name="acordeon" type="radio">
						<label for="opc-3">Ojos</label>
						<article class="opc-estilo">
							<?php
                                $contador = 1;
                                foreach (glob("images/eyes/*.png") as $nombre_archivo) {
                                    echo '<img src="'.$nombre_archivo.'" alt="Ojos '.$contador++.'" onClick="setImagen(2, this.src)" />'."\n"; 
                                }
                            ?>
							<img src="images/null.png" alt="Eliminar" onClick="setImagen(2, null)" />
						</article>
				</div>

				<div>
					<input id="opc-4" name="acordeon" type="radio">
						<label for="opc-4">Nariz</label>
						<article class="opc-estilo">
							<?php
                                $contador = 1;
                                foreach (glob("images/nose/*.png") as $nombre_archivo) {
                                    echo '<img src="'.$nombre_archivo.'" alt="Nariz '.$contador++.'" onClick="setImagen(3, this.src)" />'."\n"; 
                                }
                            ?>
							<img src="images/null.png" alt="Eliminar" onClick="setImagen(3, null)" />
						</article>
				</div>

				<div>
					<input id="opc-5" name="acordeon" type="radio">
						<label for="opc-5">Boca</label>
						<article class="opc-estilo">
							<?php
                                $contador = 1;
                                foreach (glob("images/mouth/*.png") as $nombre_archivo) {
                                    echo '<img src="'.$nombre_archivo.'" alt="Boca '.$contador++.'" onClick="setImagen(4, this.src)" />'."\n"; 
                                }
                            ?>
							<img src="images/null.png" alt="Eliminar" onClick="setImagen(4, null)" />
						</article>
				</div>

				<div>
					<input id="opc-6" name="acordeon" type="radio">
						<label for="opc-6">Barba</label>
						<article class="opc-estilo">
							<?php
                                $contador = 1;
                                foreach (glob("images/beards/*.png") as $nombre_archivo) {
                                    echo '<img src="'.$nombre_archivo.'" alt="Barba '.$contador++.'" onClick="setImagen(5, this.src)" />'."\n"; 
                                }
                            ?>
							<img src="images/null.png" alt="Eliminar" onClick="setImagen(5, null)" />
						</article>
				</div>

				<div>
					<input id="opc-7" name="acordeon" type="radio">
						<label for="opc-7">Accesorios</label>
						<article class="opc-estilo">
							<?php
                                $contador = 1;
                                foreach (glob("images/accessories/*.png") as $nombre_archivo) {
                                    echo '<img src="'.$nombre_archivo.'" alt="Accesorio '.$contador++.'" onClick="setImagen(6, this.src)" />'."\n"; 
                                }
                            ?>
							<img src="images/null.png" alt="Eliminar" onClick="setImagen(6, null)" />
						</article>
				</div>

				<div>
					<input id="opc-8" name="acordeon" type="radio">
						<label for="opc-8">Gorros</label>
						<article class="opc-estilo">
							<?php
                                $contador = 1;
                                foreach (glob("images/hat/*.png") as $nombre_archivo) {
                                    echo '<img src="'.$nombre_archivo.'" alt="Gorro '.$contador++.'" onClick="setImagen(7, this.src)" />'."\n"; 
                                }
                            ?>
							<img src="images/null.png" alt="Eliminar" onClick="setImagen(7, null)" />
						</article>
				</div>

				<div>
					<input id="opc-9" name="acordeon" type="radio">
						<label for="opc-9">Anteojos</label>
						<article class="opc-estilo">
							<?php
                                $contador = 1;
                                foreach (glob("images/glasses/*.png") as $nombre_archivo) {
                                    echo '<img src="'.$nombre_archivo.'" alt="Anteojos '.$contador++.'" onClick="setImagen(8, this.src)" />'."\n"; 
                                }
                            ?>
							<img src="images/null.png" alt="Eliminar" onClick="setImagen(8, null)" />
						</article>
				</div>
			</section>
		</div>

		<div id="disqus_thread">
			<script type="text/javascript">
				/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
				var disqus_shortname = 'soulgamers8bitsavatar'; // required: replace example with your forum shortname

				/* * * DON'T EDIT BELOW THIS LINE * * */
				(function() {
				var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
				dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
				(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
				})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
		</div>

		<footer>
			<p>SoulGamers Design - 2014</p>
		</footer>
	</body>
</html>
<!-- CSS -->
<link rel="stylesheet" href="css/sgStyle.min.css" type="text/css" />
<link rel="stylesheet" href="css/sgMQuery.min.css" type="text/css" />
<!-- Scripts -->
<script type="text/javascript" src="scripts/canvassaver.min.js"></script>
<script type="text/javascript" src="scripts/avatar.min.js"></script>