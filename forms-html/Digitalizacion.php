<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Digitalizacion</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="form-control bg-white">
        <form class="container text-center">
            <h3>Digitalizacion</h3>
            <div class="form-control-lg">
                <select>
                    <option selected>Login</option>
                    <option value="1">Uno</option>
                    <option value="2">Dos</option>
                </select>
            </div>
            <div class="form-control-lg">
                <select>
                    <option selected>Id Expediente Requisito</option>
                    <option value="1">Expediente 1</option>
                    <option value="2">Expediente 2</option>
                </select>
            </div>
            <div class="form-control-lg">
                <input type="text" placeholder="Nombre del Archivo">
            </div>
            <div>
                <label for="fechaEscaneo">Fecha escaneo: </label>
                <input id="fechaEscaneo" type="date" placeholder="Fecha escaneo">
            </div>
            <br>
            <button type="submit" class="btn btn-dark">Enviar Formulario</button>



        </form>
    </div>
</div>

</body>
</html>