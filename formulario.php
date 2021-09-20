<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>Información</title>
    
</head>
<body>
    <div class="contenido mt-5">
        <div class="container">
            <h1>Reservación</h1>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 33%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">33%</div>
            </div>
            <div class="paso mt-5">
                <span class="badge rounded-pill bg-brown">1</span>
                <p><b>Datos de reservación</b></p>
            </div>
            <div class="formulario mt-5">
                <form action="">
                    <div class="campos">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Juan Perez">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Telefono</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@gmail.com">
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">No. personas</label>
                                <input class="quantity form-control" min="0" max="100" name="quantity" value="1" type="number">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Dia</label>
                                <input placeholder="Select date" type="date" id="example" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Hora</label>
                                <input type="time" id="inputMDEx1" class="form-control">
                            </div>
                        </div>
                        <button type="button" class="btn bg-brown boton mt-5 m-auto">CONTINUAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>