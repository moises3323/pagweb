<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Desarrolladores</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
    <div class="form-control bg-white">
        <form class="container text-center" >
            <h3>Desarrolladores</h3>
            <div class="form-control-lg">
                <input type="text" id="nombreDesarrollador" placeholder="Nombre Desarrollador" >
            </div>
            <div class="form-control-lg">
                <input type="text" id="nit" placeholder="Nit" value="" required>
            </div>
            <div class="form-control-lg">
                <input type="text" id="direcionEmpresa" placeholder="Direccion Empresa" >
            </div>
            <div class="form-control-lg">
                <input type="text" id="correo" placeholder="ejemplo@mail.com" >
            </div>
            <div class="form-control-lg">
                <input type="tel" id="telefono" placeholder="ej. 12345678" >
            </div>
            <button class="btn btn-dark" type="submit">Enviar Formulario</button>
        </form>
    </div>
</div>

</body>
</html>