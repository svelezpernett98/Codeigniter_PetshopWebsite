<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('public/styles/estilos4.css') ?>">
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
        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-md-6 g-4">
                <?php foreach($productosReptil as $producto): ?>
                    <div class="col">
                        <div class="card h-100 p-3">
                            <img src="<?= $producto["foto"] ?>" class="card-img-top h-100" alt="foto">
                            <div class="card-body">
                                    
                                <h5 class="card-title"><?= $producto["producto"] ?></h5>
                                <p class="card-text"><?= $producto["precio"] ?></p>
                                <a data-bs-toggle="modal" data-bs-target="#confirmacion<?=$producto["id"]?>"  href="#" class="btn btn-primary"><i class="fas fa-trash-alt"></i></a>
                                <a data-bs-toggle="modal" data-bs-target="#editar<?=$producto["id"]?>" href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>

                              
                                
                                 
                            </div>
                        </div>
                        <section>
                            <div class="modal fade" id="confirmacion<?=$producto["id"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header fondoPrincipal text-white">
                                    <h5 class="modal-title" id="exampleModalLabel">Casa animal</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>¿Estás seguro de eliminar este producto?</p>
                                    <p><?= $producto["id"] ?></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <a href="<?= site_url('/productos/eliminar/'.$producto["id"])?>" class="btn btn-danger">Eliminar</a>
                                </div>
                                </div>
                            </div>
                        </div>

                        </section>

                        <section>
                        <div class="modal fade" id="editar<?=$producto["id"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header fondonav fuente">
                                    <h5 class="modal-title" id="exampleModalLabel">Casa animal</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-9">
                                            <form action="<?= site_url('/productos/editar/'.$producto["id"])?>" method="post">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Precio</label>
                                                    <input type="number" class="form-control" name="precio" valaue="<?= $producto["precio"] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Nombre</label>
                                                    <input type="text" class="form-control" name="producto" valaue="<?= $producto["producto"] ?>">

                                                </div>
                                                <button type="submit" class="btn btn-primary">Editar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                               
                             </div>
                            </div>
                        </div>

                        </section>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>
    <br><br><br>

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


    <script src="https://kit.fontawesome.com/7b642ec699.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="<?= base_url('public/js/menulateral.js') ?>"></script>


</body>
</html>