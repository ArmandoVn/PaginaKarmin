<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Knewave" rel="stylesheet">
		<link rel="stylesheet" href="css/estilos.css">
		<title>Papeleria Karmin</title>
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	</head>
	<body>

		<header class="header">
			<h1 class="header-text">KARMIN</h1>
			<nav>
				<ul>
					<li class="karmin">KARMIN</li>
					<li class="nav-item nav-item-active"><a href="index.html" class="nav-link">Inicio</a></li>
					<li class="nav-item"><a href="departamentos.html" class="nav-link">Departamentos</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Contacto</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Ingresar</a></li>
				</ul>
			</nav>
		</header>

		<div class="line"></div>

		<section>


			<?
			$usuario = "postgres";
			$contraseña = "1Vnarmando";

			try {
			    $mbd = new PDO('pgsql:host=localhost;dbname=paginakarmin', $usuario, $contraseña);
			    //Sentencias preparadas, son mas repidas que las sentencias normales y
			    //evitan la insercion de codigo sql.
			    // $sql = "INSERT INTO departamento (nombre) VALUES (':nombre')";
			    // $sentencia = $mbd->prepare($sql);
			    // $sentencia->bindParam(':nombre',$nombre);
			    // $nombre = 'bastidores';
			    // $sentencia->execute();
			    $sql = 'SELECT * from departamento';
			    foreach($mbd->query($sql) as $fila) {
			      print "<article class=\"departament-card\">
			              <div class=\"half-departament-card\">
			                <div class=\"departament-card-content\">";
			            print "<h2 class=\"card-title\">".$fila['nombre']."</h2>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
												sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
												 Ut enim ad minim veniam, quis nostrud exercitation ullamco
												 laboris nisi ut aliquip ex ea commodo consequat.
												 Duis aute irure dolor in reprehenderit in voluptate velit
												 esse cillum dolore eu fugiat nulla pariatur. Excepteur
												 sint occaecat cupidatat non proident, sunt in culpa qui
												 officia deserunt mollit anim id est laborum.<\p>
			                </div>
			              </div>
			            </article>";
			    }
			    unset($fila);//Se utiliza para desreferenciar del ultimo valor del array la variable auxiliar
			                //del foreach para de esta forma no sobreescribir valores del array.
			    $mbd = null;
			} catch (PDOException $e) {
			    print "¡Error!: " . $e->getMessage() . "<br/>";
			    echo "pilin";
			    die();
			}
			?>

			<article class="departament-card">
				<div class="half-departament-card">
					<img src="img/Dibujo.jpg" alt="Mural" class="img-departament" id="dibujo">
				</div>
				<div class="half-departament-card">
					<div class="departament-card-content">
						<h2 class="card-title">Acuarelas</h2>
						<p>Aqui podras encontrar todo lo que necesitas para ese dibujo creativo y bonito que tienes en mente.</p>
						<a href="#">Lapices</a>
					</div>
				</div>
			</article>

			<article class="departament-card">
				<div class="half-departament-card">
					<div class="departament-card-content">
						<h2 class="card-title">Acuarelas</h2>
						<p>Aqui podras encontrar todo lo que necesitas para ese dibujo creativo y bonito que tienes en mente.</p>
						<a href="#">Lapices</a>
					</div>
				</div>
				<div class="half-departament-card">
					<img src="img/Dibujo.jpg" alt="Mural" class="img-departament" id="dibujo2">
				</div>
			</article>

			</div>
		</section>

		<footer class="footer-color">
				<div class="card-body">
					<h5 class="card-title">¿Donde estamos?</h5>
					<p class="card-text">Prol. Constitución 3A, La Concha, 16210 Xochimilco, CDMX. <br> Frente  a la Iglesia de la Virgen de la Inmaculada Concepción</p>
			  </div>
				<div class="card-body">
					<h5 class="card-title">¿Quienes somos?</h5>
					<p class="card-text">Somos una microempresa comprometida a brindarte el merjor servicio y sobre todo precio de esos materiales que necesitas para hacer realidad todas tus ideas.</p>
			  </div>
				<div class="card-body">
					<h5 class="card-title">Contacto</h5>
					<p class="card-text">Facebook <br>Twitter <br>Correo</p>
			  </div>
			<!-- Copyright -->
			<div class="card-text copyright">© 2018 Copyright:
				<a href="https://github.com/ArmandoVn">ArmandoVn.com</a>
			</div>
			<!-- Copyright -->
		</footer>
		<script type="text/javascript" src="js/parallax.js"></script>
	</body>
</html>
