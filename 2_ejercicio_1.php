<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="assets/img/favicon.ico">

        <title>Ejercicio 1</title>

		<link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/style_ejercicios.css" rel="stylesheet">
	</head>
	
	<body>
		<main role="main">
            <div class="container" >
                <div class="row" >
                    <div class="col-md-12">
                        <h6 class="font-weight-bold" >Ejercicio que devuelva el número de letras mayúsculas que contiene dicha cadena.</h6>
                    </div>

                    <div class="col-md-12"><br></div>
                    
                    <div class="col-md-12">
                        <div class="col-md-12">Introduce una cadena:</div>

                        <div class="row" >
                            <div class="col-md-10"><input type="text" id="cadena" name="cadena" class="form-control" ></div>
                            <div class="col-md-2"><button type="button" onclick="CantidadMayusculas();" class="btn btn-primary">Procesar</button></div>
                        </div>
                    </div>

                    <div class="col-md-12"><br></div>

                    <div class="col-md-12" id="div_resp" style="display:none" >
                        <div class="col-md-12" ><h6>Resultados</h6></div>

                        <div class="container" >
                            <div class="row" >
                                <div class="col-md-4" >Mayusculas Obtenidas:</div>
                                <div class="col-md-8" ><h6 id="resp3" class="display-contents" ></h6></div>
                            </div>
                        </div>

                        <div class="container" >
                            <div class="row" >
                                <div class="col-md-4" >Total Caracteres Obtenidos:</div>
                                <div class="col-md-8" ><h6 id="resp4" class="display-contents" ></h6></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</main>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="assets/js/bootstrap/bootstrap.min.js"></script>

        <script>
            function CantidadMayusculas(){
                var var_cadena = "";
                var var_cadena_cont = 0;

                var cadena = new String($("#cadena").val());
                for (var i=0; i < cadena.length; i++) {
                    var busqueda = cadena[i].search(/[A-Z]/);
                    if(busqueda==0){
                        var_cadena += cadena[i];
                        var_cadena_cont += 1;
                    }
                }

                document.getElementById("resp3").innerHTML = var_cadena;
                document.getElementById("resp4").innerHTML = var_cadena_cont;
                document.getElementById("div_resp").style.cssText = "display: block;";
            }
        </script>
	</body>
</html>