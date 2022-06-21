<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="assets/img/favicon.ico">

        <title>Ejercicio 3</title>

		<link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/style_ejercicios.css" rel="stylesheet">
	</head>
	
	<body>
		<main role="main">
            <div class="container" >
                <div class="row" >
                    <div class="col-md-12">
                        <h6 class="font-weight-bold" >Ejercicio dado un array ejemplo [7,2,1,5,9,6], ordene sus valores de menor a mayor.</h6>
                    </div>

                    <div class="col-md-12"><br></div>

                    <div class="col-md-12" id="div_resp" >
                        <div class="container" >
                            <div class="row" >
                                <div class="col-md-2" >Resultado:</div>
                                <div class="col-md-10" ><h6 id="resp_1" class="display-contents" ></h6></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</main>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="assets/js/bootstrap/bootstrap.min.js"></script>

        <script>
            ProcesamientoDato();
            
            function ProcesamientoDato(){
                var data = [7,2,1,5,9,6];

                document.getElementById("resp_1").innerHTML = data.sort();
            }
        </script>
	</body>
</html>