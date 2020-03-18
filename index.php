<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encriptacion RC4</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <div class="container">
        	<div class="row">
        		<div class="col">
        			<h1>Encriptacion de mensaje RC4</h1>
        		</div>
        	</div>
        	<div class="row">
            	<div class="col">
            		<form action="enviar.php" method="post">
					  <div class="form-group">
					  	<div class="card" style="width: 100%;">
						  <div class="card-body">
						    <div class="container card-text">
						    	<div class="row">
						    		<div class="col">
						    			<h5 class="card-title">Destino</h5>
						    		</div>
						    	</div>
						    	<div class="row">
						    		<div class="col-5">
								    	<label for="exampleFormControlInput1">Para</label>
								    	<input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" placeholder="nombre de destino" required="">
								    </div>
								    <div class="col-7">
								    	<label for="exampleFormControlInput1">Email</label>
								    	<input type="email" class="form-control" name="email" id="exampleFormControlInput2" placeholder="name@gmail.com" required="">
								    </div>
						    	</div>
						    	<div class="row">
						    		<div class="col">
						    			<h5 class="card-title">Cuerpo</h5>
						    		</div>
						    	</div>
						    	<div class="row">
						    		<div class="col">
									    <div class="form-group">
											<label for="exampleFormControlInput1">Asunto</label>
								    		<input type="text" class="form-control" name="asunto" id="exampleFormControlInput3" placeholder="..." required="">
										</div>						    			
						    		</div>
						    	</div>
						    	<div class="row">
						    		<div class="col">
									    <div class="form-group">
											<label for="exampleFormControlTextarea1">Contenido</label>
										    <textarea class="form-control" name="contenido" id="exampleFormControlTextarea1" rows="3" required="" placeholder="..."></textarea>
										</div>						    			
						    		</div>
						    	</div>
						    	<div class="row">
						    		<div class="col-2">
									    <div class="form-group">
											<label for="exampleFormControlInput1">Clave</label>
								    		<input type="text" class="form-control" name="key" id="exampleFormControlInput5" placeholder="..." required="">
										</div>						    			
						    		</div>
						    	</div>
						    	<div class="row">
						    		<div class="col">
						    			<button type="submit" class="btn btn-primary">Enviar</button>
						    		</div>
						    	</div>
						    </div>
						  </div>
						</div>
					  </div>
					</form>
            	</div>
            </div>
            <div class="row">
                <div class="col-md-12 xs-12">
                    <p class="text-center">
                        Victor Chambilla Quispe - Seguridad de Sistemas de Informacion
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/vue.js"></script>
<script src="js/principal.js"></script>
</html>