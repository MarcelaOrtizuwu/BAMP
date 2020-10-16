<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>¡Registra tu Viaje!</title>
</head>
<body>
<input type="checkbox" id="Check">
	<label for="Check">
		<img src="menu.png" class="icono">
	</label>
	<nav>
		<ul>
			<li><a href="home.html">Nuestro Mapa</a></li>
			<li><a href="form.php">Registra tu viaje</a></li>
		</ul>
    </nav>
    <script type="text/javascript">
		var song=["song.mp3"];
		var f = new Audio();
		f.loop = true;
		
		
        window.onload = playSong;
		function playSong(){
            f.src = song[0];
            f.play();
        }
	</script>
	<div class="ola11"> <img src="olas/wave.png" class="ola11"></div>
	<div class="ola12"> <img src="olas/wave2.png" class="ola12"></div>
	<div class="ola13"> <img src="olas/wave.png" class="ola13"></div>
	<div class="ola14"> <img src="olas/wave2.png" class="ola14"></div>
	<div class="ola15"> <img src="olas/wave.png" class="ola15"></div>
	<div class="ola16"> <img src="olas/wave2.png" class="ola16"></div>
	<div class="ola17"> <img src="olas/wave.png" class="ola17"></div>
	<div class="ola18"> <img src="olas/wave2.png" class="ola18"></div>
	<div class="ola19"> <img src="olas/wave.png" class="ola19"></div>
	<div class="ola20"> <img src="olas/wave2.png" class="ola20"></div>
	<div class="ola21"> <img src="olas/wave.png" class="ola21"></div>
	<div class="ola22"> <img src="olas/wave2.png" class="ola22"></div>
	<div class="ola23"> <img src="olas/wave.png" class="ola23"></div>
	<div class="ola24"> <img src="olas/wave2.png" class="ola24"></div>
	<div class="ola25"> <img src="olas/wave.png" class="ola25"></div>
	<div class="ola26"> <img src="olas/wave2.png" class="ola26"></div>
	<div class="ola27"> <img src="olas/wave.png" class="ola27"></div>
	<div class="ola28"> <img src="olas/wave2.png" class="ola28"></div>
	<div class="ola29"> <img src="olas/wave.png" class="ola29"></div>
	<div class="ola30"> <img src="olas/wave2.png" class="ola30"></div>
	<div class="ola32"> <img src="olas/wave.png" class="ola32"></div>
	<div class="ola33"> <img src="olas/wave2.png" class="ola33"></div>
	<div class="ola34"> <img src="olas/wave.png" class="ola34"></div>
	<div class="ola35"> <img src="olas/wave2.png" class="ola35"></div>
	<div class="ola36"> <img src="olas/wave.png" class="ola36"></div>
	<div class="ola37"> <img src="olas/wave2.png" class="ola37"></div>
    <div class="ola38"> <img src="olas/wave.png" class="ola38"></div>
    
    <section>
		<h1>Formulario Hecho en Clase</h1>
		<div class="form">
		<form method="POST">
            <h2>Registra un viaje.</h2>
			<input class="control" type="text" name="name" id="name" placeholder="Ingrese su Nombre completo"><br>
			<label class="ashu"for="">País de destino:</label><br><br>
			<select class="sis" name="destiny" id="">
				<option value="Albania">Albania</option>
				<option value="Alemania">Alemania</option>
				<option value="Andorra">Andorra</option>
				<option value="Armenia">Armenia</option>
                <option value="Austria">Austria</option>
				<option value="Azerbaiyán">Azerbaiyán</option>
				<option value="Bélgica">Bélgica</option>
				<option value="Bielorrusia">Bielorrusia</option>
				<option value="BosniayHerzegovina">Bosnia y Herzegovina</option>
				<option value="Bulgaria">Bulgaria</option>
				<option value="Chipre">Chipre</option>
				<option value="Croacia">Croacia</option>
				<option value="Dinamarca">Dinamarca</option>
				<option value="Eslovaquia">Eslovaquia</option>
				<option value="Eslovenia">Eslovenia</option>
				<option value="España">España</option>
				<option value="Estonia">Estonia</option>
				<option value="Finlandia">Finlandia</option>
				<option value="Francia">Francia</option>
				<option value="Georgia">Georgia</option>
				<option value="Grecia">Grecia</option>
				<option value="Hungría">Hungría</option>
				<option value="Irlanda">Irlanda</option>
				<option value="Islandia	">Islandia</option>
                <option value="Italia">Italia</option>
				<option value="Kazajistán">Kazajistán</option>
				<option value="Letonia">Letonia</option>
				<option value="Liechtenstein">Liechtenstein</option>
				<option value="Lituania">Lituania</option>
				<option value="Luxemburgo">Luxemburgo</option>
				<option value="Macedonia ">Macedonia</option>
				<option value="Malta">Malta</option>
				<option value="Moldavia">Moldavia</option>
				<option value="Moldavia">Moldavia</option>
				<option value="Noruega">Noruega</option>
				<option value="PaísesBajos">Países Bajos</option>
				<option value="Polonia">Polonia</option>
				<option value="Portugal">Portugal</option>
				<option value="ReinoUnido">Reino Unido</option>
				<option value="Chequia">Chequia</option>
				<option value="Rumanía">Rumanía</option>
				<option value="Rusia">Rusia</option>
				<option value="SanMarino">San Marino</option>
				<option value="Serbia">Serbia</option>
				<option value="Suecia">Suecia</option>
				<option value="Suiza">Suiza</option>
				<option value="Alemania">Alemania</option>
				<option value="Turquía">Turquía</option>
				<option value="Ucrania">Ucrania</option>
            </select>
			<input class="control" type="number" min="1" max="60" name="estadia" id="estadia" placeholder="Tiempo de estadía (días)"><br>
			<input class="botonxd" type="submit" name="ora" value="Continuar">
		</form>
    </div>
    <div action="search2.php" class="abajo">
    <h2>Buscar un registro.</h2>
            <form method="POST">
                <input class="control" type="text" name="name" id="name" placeholder="Ingrese su nombre">
                <input class="botonxd" type="submit" name="buscar" value="Buscar Registro">
            </form>
        </div>
    <div class="abajo2">
    <h2>Eliminar a un viaje.</h2>
            <form method="POST">
                <input class="control" type="text" name="name" id="name" placeholder="Ingrese su nombre">
                <input class="botonxd" type="submit" name="eliminar" value="Eliminar Registro">
            </form>
	</div>
	<form method="POST">
		<div class="abajo3">
		<form method="POST">
		<h2>Modifica los datos del viaje.</h2>
			<input class="control" type="text" name="name" id="name" placeholder="Ingrese su Nombre Registrado"><br>
			<label class="ashu"for="">Destino Nuevo</label><br><br>
			<select class="sis" name="destiny" id="">
            <option value="Albania">Albania</option>
				<option value="Alemania">Alemania</option>
				<option value="Andorra">Andorra</option>
				<option value="Armenia">Armenia</option>
                <option value="Austria">Austria</option>
				<option value="Azerbaiyán">Azerbaiyán</option>
				<option value="Belgica">Bélgica</option>
				<option value="Bielorrusia">Bielorrusia</option>
				<option value="BosniayHerzegovina">Bosnia y Herzegovina</option>
				<option value="Bulgaria">Bulgaria</option>
				<option value="Chipre">Chipre</option>
				<option value="Croacia">Croacia</option>
				<option value="Dinamarca">Dinamarca</option>
				<option value="Eslovaquia">Eslovaquia</option>
				<option value="Eslovenia">Eslovenia</option>
				<option value="Espana">España</option>
				<option value="Estonia">Estonia</option>
				<option value="Finlandia">Finlandia</option>
				<option value="Francia">Francia</option>
				<option value="Georgia">Georgia</option>
				<option value="Grecia">Grecia</option>
				<option value="Hungria">Hungría</option>
				<option value="Irlanda">Irlanda</option>
				<option value="Islandia	">Islandia</option>
                <option value="Italia">Italia</option>
				<option value="Kazajistan">Kazajistán</option>
				<option value="Letonia">Letonia</option>
				<option value="Liechtenstein">Liechtenstein</option>
				<option value="Lituania">Lituania</option>
				<option value="Luxemburgo">Luxemburgo</option>
				<option value="Macedonia ">Macedonia</option>
				<option value="Malta">Malta</option>
				<option value="Moldavia">Moldavia</option>
				<option value="Moldavia">Moldavia</option>
				<option value="Noruega">Noruega</option>
				<option value="PaisesBajos">Países Bajos</option>
				<option value="Polonia">Polonia</option>
				<option value="Portugal">Portugal</option>
				<option value="ReinoUnido">Reino Unido</option>
				<option value="Chequia">Chequia</option>
				<option value="Rumania">Rumanía</option>
				<option value="Rusia">Rusia</option>
				<option value="SanMarino">San Marino</option>
				<option value="Serbia">Serbia</option>
				<option value="Suecia">Suecia</option>
				<option value="Suiza">Suiza</option>
				<option value="Alemania">Alemania</option>
				<option value="Turquia">Turquía</option>
				<option value="Ucrania">Ucrania</option>
				</select>
			<input class="control" type="number" min="1" max="60" name="estadia" id="estadia" placeholder="Tiempo de estadía (días)"><br>
				<input class="botonxd" type="submit" name="ora2" value="Continuar">
		</form>
    </div>		
    </section>
    
    <?php
    include("registro.php");
    include("delete.php");
	include("search.php");
	include("modify.php");
    ?>
</body>
</html>