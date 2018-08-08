<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cat_Proyectos</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="form-control bg-white">
        <form class="container text-center">
            <h3>Categoría Proyectos</h3>
            <div class="form-control-lg">
                <input type="text" id="nombre_proyecto" placeholder="Nombre Proyecto" >
            </div>
            <div class="form-control-lg">
                <input type="text" id="longitud" placeholder="Longitud" >
                <input type="text" id="latitud" placeholder="Latitud" >
            </div>
            <div class="form-control-lg" >
                <input type="number"  id="montoAprox" placeholder="Monto Aproximado" >
            </div>
            <div class="form-control-lg">
                <input type="date" id="fechaInicio" placeholder="Fecha inicio trabajo">
            </div>
            <button class="btn btn-dark" type="submit">Enviar Formulario</button>
        </form>
    </div>
</div>

</body>
</html>