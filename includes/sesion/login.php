<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE GESTIÓN ESCOLAR | UEE 19 DE ABRIL</title>
    <link rel="stylesheet" href="../vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    

</head>

<body class="login">
    <div class="container">
        <div id="login"></div>
        <div class="row justify-content-center align-items-center min-vh-100">
            <div id="login-box shadow-lg" class="card col-6 p-4">
                <div class="row text-center m-4 ">
                    <div class="col-sm"></div>
                    <div class="col-sm"><img src="../../img/logo.jpg" class="img-fluid" alt="logo de la institución"></div>
                    
                    <div class="col-sm"></div>
                </div>
                <div class="row">
                    <div class="col">
                        
                        <form class="row needs-validation" novalidate id="loginForm" name="loginData">
                            <div class="col g-2">
                                <div id="alert"></div>
                                <p class="text-center text-secondary">Ingrese su usuario y contraseña para iniciar sesión</p>
                                

                                    <div class="form-floating mb-3">
                                        
                                        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="aa" required>
                                        <label for="usuario">Usuario</label>
                                    </div>

                                   <div class="form-floating mb-3 ">
                                    
                                        <input type="password" id="password" name="password" class="form-control" placeholder="aa" required>
                                        <label for="password">Contraseña</label>
                                    </div> 


                                

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success">Acceder</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    
                
                </div>

            </div>
        </div>
    </div>


    <script src="../../js/login.js"></script>
</body>

</html>