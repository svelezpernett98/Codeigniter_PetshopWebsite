<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animalandia</title>
    
	<link rel="stylesheet" href="<?= base_url('public/styles/estilos3.css') ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Acme&family=Lobster&family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>
<header>

		<div class="fondonav">

		<div class="botonmenu zoom"><a href="<?= site_url('/') ?>"><img src="<?= base_url('public/img/left-arrow.png') ?>" alt=""></a></div>

			<div class="container">

				<div class="d-flex bd-highlight mb-2">
					<a href="<?= site_url('/') ?>">
						<div class="p-2 bd-highlight"><img class="mt-1" src="<?= base_url('public/img/huellalogo.png') ?>" alt=""></div>
					</a>
					
					<div class="me-auto p-2 bd-highlight d-flex align-items-center">
						<h1 class="fuente">Casa animal</h1>
					</div>
				</div>

			

			</div>
		</div>
	</header>

    <main>
        <div class="container mb-5">
             <div class="row mt-5 d-flex justify-content-center">
                <div class="col-12 col-md-5">
                    <h3 class="fuente2 fw-bold text-center">Registro de productos</h3>
                    
                    <form action="<?= site_url('/productos/registro/nuevo') ?>" method="POST" class="mt-4">
                        <div class="mb-3">
                            <label class="form-label">Producto:</label>
                            <input type="text" class="form-control" name="producto">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Fotografía:</label>
                            <input type="text" class="form-control" name="foto">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Precio Unidad:</label>
                            <input type="number" class="form-control" name="precio">
                        </div>

                        <div class="mb-3">

                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Descripcion" name="descripcion" style="height: 100px"></textarea>
                                <label for="floatingTextarea">Descripción</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tipo de animal:</label>
                            <select class="form-select" name="tipo">
                                <option value="1" selected>Perro</option>
                                <option value="2">Gato</option>
                                <option value="3">Ave</option>
                                <option value="4">Reptil</option>
                                
                            </select>
                        </div>
                        
                    <div class="d-grid gap-2">
                            <button class="btn btn-danger" type="submit">Registrar</button>
                        </div>
                        
                    </form>
                </div>
                <div class="col-12 col-md-5 align-self-end text-center">
                    <img src="<?= base_url('public/img/gatosgrupo.jpg')?>" alt="imagen" class="img-fluid w-100">
				</div>
            </div>
        </div>
       
    </main>

	<section>
		<?php if(session('mensaje')):?>

			<div class="modal fade" id="modalrespuesta" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header fondoPrincipal text-white">
							<h5 class="modal-title text-center">CASAHOGAR</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<h5><?= session('mensaje') ?></h5>
						</div>
					</div>
				</div>
			</div>	

		<?php endif ?>
		
	</section>
    
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

	<script type="module" src="<?= base_url('public/js/lanzarmodal.js') ?>">   </script>
    <script src="https://kit.fontawesome.com/7b642ec699.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>