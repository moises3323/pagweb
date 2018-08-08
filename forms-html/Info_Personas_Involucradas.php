<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <div class="form-control bg-white">
        <form class="container text-center">
                <h2>Informacion Personas Involucradas</h2>
                    <div class="form-control-lg">
                        <input type="text" maxlength="50" id="numeroDocumento" placeholder="Numero de Documento" value="" >
                    </div>
                    <div class="form-control-lg">
                        <input type="text" id="nombre1" placeholder="Primer Nombre" value="" >
                    </div>
                    <div class="form-control-lg">
                        <input type="text" id="nombre2" placeholder="Segundo Nombre" value="" >
                    </div>
                    <div class="form-control-lg">
                        <input type="text" id="apellido1" placeholder="Primer Apellido" >
                    </div>
                    <div class="form-control-lg">
                        <input type="text" id="apellido2" placeholder="Segundo Apellido" >
                    </div>
            <br>
                <button class="btn btn-dark" type="submit">Enviar Formulario</button>
        </form>
    </div>
</div>

</body>
</html>