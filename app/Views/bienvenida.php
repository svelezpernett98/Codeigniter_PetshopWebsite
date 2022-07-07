<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Animalandia</title>
	
	<link rel="stylesheet" href="<?= base_url('public/styles/estilos5.css') ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Acme&family=Lobster&family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">


</head>
<body>

<div class="fondozebra">

	<header>

		<div class="fondonav">

		<div class="botonmenu zoom"><img id="botonmenu" src="<?= base_url('public/img/menu.png') ?>" alt=""></div>

			<div class="container">

				<div class="d-flex bd-highlight mb-2">
					<a href="<?= site_url('/') ?>">
						<div class="p-2 bd-highlight"><img class="mt-1" src="<?= base_url('public/img/huellalogo.png') ?>" alt=""></div>
					</a>
					
					<div class="me-auto p-2 bd-highlight d-flex align-items-center">
						<h1 class="fuente">Casa animal</h1>
					</div>
					<div class="p-2 bd-highlight d-flex align-items-center">
						<a href="<?= site_url('/productos/registro') ?>">
							<button type="button" class="btn btn-dark">
								<h5 class="botonregistrar">Registrar productos</h5>
							</button>
						</a>
					</div>
					<div class="p-2 bd-highlight d-flex align-items-center">
						<a href="<?= site_url('/productos/listado') ?>">
							<button type="button" class="btn">
								<h5 id="registrarse">Inventario</h5>
							</button>
						</a>
					</div>
					<div class="p-2 bd-highlight d-flex align-items-center">
						<a href="">
							<button type="button" class="btn">
								<h5 id="ingresar">Ingresar <span><img src="<?= base_url('public/img/perfil-del-usuario.png') ?>" alt=""></span>
								</h5>
							</button>
						</a>
					</div>
				</div>

			

			</div>
		</div>
	</header>


 
	
	<section>
		<div class="wrapper">

		
			<div class="container mt-5">
				<div class="row">
					<div class="col-12">
					<img src="<?= base_url('public/img/banner1.png')?>" class="d-block w-100 rounded" alt="co1">
						
					</div>
				</div>

			

			</div>

			<div class="inner">
				<a href="<?= site_url('/productos/perro/listado') ?>">
					<div id="menuperro" class="sliding-menu1"><img src="<?= base_url('public/img/dog.png')?>" title="Perros" alt=""></div><br>
				</a>
				<a href="<?= site_url('/productos/gato/listado') ?>">
					<div id="menugato" class="sliding-menu1"><img src="<?= base_url('public/img/cat.png')?>" title="Gatos" alt=""></div><br>
				</a>
				<a href="<?= site_url('/productos/ave/listado') ?>">
					<div id="menuave" class="sliding-menu1"><img src="<?= base_url('public/img/parrot.png')?>" title="Aves" alt=""></div><br>
				</a>
				<a href="<?= site_url('/productos/reptil/listado') ?>">
					<div id="menureptil" class="sliding-menu1"><img src="<?= base_url('public/img/chameleon.png')?>" title="Reptiles" alt=""></div>
				</a>			
			</div>

		</div>

		
	</section>


	<div id="testb" class="container">

	<main>
		<div class="container-fluid">
			<div class="row d-flex justify-content-center mt-4">
				<div class="col-12 col-md-6">
					<h3 class="text-center fw-bold text-center fuente2">Tienda de mascotas <span class="fuente">CASA ANIMAL</span></h3>
					<p class="text-center fuente2">
              			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime sapiente nihil corrupti enim aperiam voluptate molestias quisquam vel obcaecati repellendus ipsam quasi, facere nesciunt culpa dignissimos, illo nostrum molestiae tenetur.
            		</p>
				</div>
			</div>

			<br><br><br><br>

			
			

			<div class="row">
				<div class="col-6 contenedor-cuadro">
					<div class="row">
						<div class="col-5 cuadro">	
								<div class="zoom">
									<div class="row">
										<a href=""><div class="centrar-icono"><img class="img1" src="<?= base_url('public/img/camara.png') ?>" alt=""></div></a>
									</div>
									<div class="row">
										<h3 class="centrar-icono fuente">GALERIA</h3>
									</div>
								</div>							
						</div>

						<div class="col-5 cuadro">	
								<div class="zoom">
									<div class="row">
										<a href=""><div class="centrar-icono"><img class="img1" src="<?= base_url('public/img/telefono.png') ?>" alt=""></div></a>
									</div>
									<div class="row">
										<h3 class="centrar-icono fuente">CONTACTO</h3>
									</div>
								</div>							
						</div>

					</div>
					<br><br>
					<div class="row">
						<div class="col-5 cuadro">
								<div class="zoom">
									<div class="row">
										<a href=""><div class="centrar-icono"><img class="img1" src="<?= base_url('public/img/chat.png') ?>" alt=""></div></a>
									</div>
									<div class="row">
										<h3 class="centrar-icono fuente">AYUDA</h3>
									</div>
								</div>	
						</div>

						<div class="col-5 cuadro">
								<div class="zoom">
									<div class="row">
										<a href=""><div class="centrar-icono"><img class="img1" src="<?= base_url('public/img/mapa.png') ?>" alt=""></div></a>
									</div>
									<div class="row">
										<h3 class="centrar-icono fuente">UBICACIONES</h3>
									</div>
								</div>	
						</div>

					</div>
				</div>
				<div class="col-6">
					<img src="https://estaticos.muyinteresante.es/media/cache/1140x_thumb/uploads/images/gallery/6124cf315cafe8c3101f8bab/perro-slide_0.jpg" class="img-fluid w-100 rounded" alt="">
				</div>
			</div>

			<br><br><br>
			
		</div>
		<div class="container mb-5" id="perfil">
			<div class="row mt-5">
				<div class="col-12 col-md-6">
					<img src="<?=base_url('public/img/tienda-animales.jpg')?>" alt="adopta" class="img-fluid w-100 rounded">
				</div>
				<div class="col-12 col-md-6 align-self-center">

					<h2 class="fuente2 fw-bold">Somos lider en el mercado</h2>
					<p class="fuente2">
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat ratione quos similique, quam nihil recusandae atque saepe magnam eveniet! A quo consequuntur enim cum qui! Earum repellat accusantium ipsum laboriosam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam molestiae sequi incidunt voluptate nostrum dicta, quos iure, vitae exercitationem praesentium ad facilis, voluptates vel libero saepe facere nobis fuga. Voluptatibus!
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic laborum rerum quaerat
						<br>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat ratione quos similique, quam nihil recusandae atque saepe magnam eveniet! A quo consequuntur enim cum qui! Earum repellat accusantium ipsum laboriosam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam molestiae sequi incidunt voluptate nostrum dicta, quos iure, vitae exercitationem praesentium ad facilis, voluptates vel libero saepe facere nobis fuga. Voluptatibus!
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic laborum rerum quaerat
					</p>

				</div>
			</div>
		</div>
	</main>

	<footer class="fondoDos p-5">

		<div class="container-fluid">

		<div class="row">
			<div class="col-12 col-md-4">
				<h3 class="fw-bold">Horario de atención:</h3>
				<p>Lunes a viernes 7:00 am - 3:00 pm / Sábado: 7:00 am - 2:30 pm / Domingos y festivos 8:00 am - 3:00 pm</p>
				<br>
				<h3 class="fw-bold">Dirección:</h3>
				<p>Belén Altavista Calle 8A # 112-82 </p>
			</div>

			<div class="col-12 col-md-4">
				<h3 class="fw-bold">Ayudas:</h3>
				<p>Glosario / Correo remoto  /  Monitoreo y desempeño de uso del sitio web</p>
				<br>
				<h3 class="fw-bold">Protección de datos:</h3>
				<p>Protección de datos personales en el Municipio de Medellín </p>
			</div>

			<div class="col-12 col-md-4">
				<h1 class="fw-bold fuente"><span><img src="<?= base_url('public/img/huellalogo.png') ?>" alt=""></span>CASA ANIMAL</h1>
				<br>
				<i class="fab fa-facebook fa-3x"></i>
				<i class="fab fa-instagram fa-3x"></i>
				<i class="fab fa-youtube fa-3x"></i>
				<br>
				<p class="mt-4">© 2021 / NIT: 890905211-1 / Código DANE: 05001 / Código Postal: 050015</p>
				
			</div>
		</div>

		</div>
		
	</footer>
	
  
 	</div>
	 <br>

 </div>
	<script src="https://kit.fontawesome.com/7b642ec699.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="<?= base_url('public/js/menulateral.js') ?>"></script>

 
</body>
</html>