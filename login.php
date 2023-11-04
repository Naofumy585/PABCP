<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./Bootstrap/css/style_index.css">
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Bootstrap/js/bootstrap.min.js">
    <style>
         * {
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>
<section>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <ul class="navbar-nav ml-auto"class="nav justify-content-end">
                <li class="nav-item"><img  src="./img/1.png" alt="Imagen 1"></li>
                <li class="nav-item">"Dulce nectar"</li>
                <li class="nav-item"><a class="nav-link active" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="./P_Enlace/Productos.php">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="./P_Enlace/Nosotros.php">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link disable" href="./P_Enlace/Contacto.php" tabindex="-1" aria-disabled="true">Contacto</a></li>
                <li class="nav-item"><a href="login.php"><img src="./img/a2.png" alt="Imagen 2"></a></li>
                    <li class="nav-item"><a href="#"><img src="./img/b2.png" alt="Imagen 3"></a></li>
            </ul>
        </nav>
    </section>

<section class="vh-100">
  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="./img/1.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="Usuario/validarusuario.php" method="POST">

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Ingresa con tu cuenta</h5>

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example17" class="form-control form-control-lg" name="correo" />
                    <label class="form-label" for="form2Example17">Correo electrónico</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" name="password"/>
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <input class="btn btn-dark btn-lg btn-block" 
                    type="submit" value="Entrar">
                  </div>
                    <a href="./Usuario/registrarusuario.php"
                      ">Registrate aquí</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>