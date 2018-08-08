<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
<div id="login" >

    <div class="container">
        <h1 class="text-center text-white pt-5 bg-dark">Login</h1>
        <div class="form-control ">
            <form method="post" action="index.php" class="container text-center">
                <div>
                    <div class="form-group">
                        <label for="username" class="text-info">Usuario:</label><br>
                        <input type="text" name="username" id="username" class="col-md-6" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-info">Contraseña:</label><br>
                        <input type="password" name="password" id="password" class="col-md-6" required>
                    </div>
                    <div class="form-group">
                        <!--<label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>-->
                        <input href="index.html" type="submit" name="submit" class="btn btn-dark btn-md" value="Entrar">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>