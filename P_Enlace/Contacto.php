<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pomperrier&display=swap">
    <link rel="stylesheet" href="../Bootstrap/css/style_contacto.css">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <title>Nosotros</title>
</head>
<body>
    <div class="container-fluid">
        <form>
            <section>
            <nav class="navbar navbar-expand-lg navbar-light ">
                <ul class="navbar-nav ml-auto"class="nav justify-content-end">
                    <li class="nav-item"><img  src="../img/1.png" alt="Imagen 1"></li>
                    <li class="nav-item">"Dulce nectar"</li>
                    <li class="nav-item"><a class="nav-link active" href="../index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="Productos.php">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="Nosotros.php">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link disable" href="Contacto.php" tabindex="-1" aria-disabled="true">Contacto</a></li>
                    <li class="nav-item" style="margin-right: auto;"><a href="#"><img src="../img/diseños/ac.png" alt="Imagen 1"></a></li>
                    <li class="nav-item"><a href="../Usuario/Registro.php"><img src="../img/a2.png" alt="Imagen 2"></a></li>
                    <li class="nav-item"><a href="#"><img src="../img/b2.png" alt="Imagen 3"></a></li>
                </ul>
            </nav>
        </section>

            <img src="../img/bb/o/p/4.png" alt="Banner" class="banner img-fluid mb-4">

            <table>
                <tr>
                       <!-- Columna de Datos de Contacto -->
                        <td>
                        <img src="../img/1.png" alt="kdkad">
                        <div id="mapa" >
                            <p><b>Direccion:</b></p>
                            <h6>Blvd. Belisario Domínguez 3329, Sin Nombre, 29020 Tuxtla Gutiérrez, Chis</h6>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238.7877380372275!2d-93.12351853254094!3d16.746608799999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd858a580ecb5%3A0x49c5169d06ab0547!2sCalle%20S%C3%A9ptima%20Poniente-Sur%201057%2C%20San%20Francisco%2C%2029066%20Tuxtla%20Guti%C3%A9rrez%2C%20Chis.!5e0!3m2!1ses!2smx!4v1695314356385!5m2!1ses!2smx">
                                </iframe>
                            </div>
                        <p>Teléfono: 9612999608</p>
                        <p>Correo: ejemplo@dominio.com</p>
                         </td>
                    <!-- Columna de Inicio de Sesión -->
                    <td>
                        <!-- Pills navs -->
                        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                            <li class="nav-item" role="presentation" >
                                <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
                                    aria-controls="pills-login" aria-selected="true">Iniciar sesión</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="/Usuario/Registro.html" role="tab"
                                    aria-controls="pills-register" aria-selected="true">Registrar</a>
                            </li>
                        </ul>
                        <!-- Pills navs -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                                <form id="login-form">
                                    <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="loginName" class="form-control" />
                                    <label class="form-label" for="loginName">Correo</label>
                                </div>
                        
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                <input type="password" id="loginPassword" class="form-control" />
                                <label class="form-label" for="loginPassword">Password</label>
                                </div>
                        
                                <!-- 2 column grid layout -->
                                <div class="row mb-4">
                                <div class="col-md-6 d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-3 mb-md-0">
                                    <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                    <label class="form-check-label" for="loginCheck"> Guardar? </label>
                                    </div>
                                </div>
                                </div>
                        
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">Iniciar sesion</button>
                        
                                <!-- Register buttons -->
                                <div class="text-center">
                                <p>No estas registrado?? <a href="#pills-register">Registrar</a></p>
                                </div>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <!-- Sección de redes sociales e información -->
            <section id="Pie_p" class="row">
                <div class="col-md-4">
                    <p>Hipertextos</p>
                    <a class="card-title mb-4 text-muted" href="#">Enlace 1</a>
                    <a href="#">Enlace 2</a>
                    <!-- Agrega más hipertextos o enlaces según sea necesario -->
                </div>
                <div class="col-md-4">
                    <p>Redes Sociales</p>
                    <!-- Añade enlaces o íconos de redes sociales aquí -->
                    <a href="#" class="social-icon"><img src="../img/facebook.png" width="30px" alt="Facebook"></a>
                    <a href="#" class="social-icon"><img src="../img/twitter.png" width="30px" alt="Twitter"></a>
                    <!-- Añade más redes sociales según sea necesario -->
                </div>
                <div class="col-md-4">
                    <p>Información de Contacto</p>
                    <p>Ubicación: Ciudad</p>
                    <p>Teléfono: +123456789</p>
                    <p>Correo: ejemplo@dominio.com</p>
                    <!-- Añade más información de contacto según sea necesario -->
                </div>
                <footer>
                    <td colspan="2">
                        <h3>Liceciatura en Sistemas computacionales</h3>
                        <p> &copy;Derechos reservados a la abeja chiapaneca</p>
                    </td>
                </footer>
            </section>
        </form>
    </div>
    <!-- Agrega la referencia al script de Bootstrap al final del body -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    // Obtén referencias a los formularios
    var loginForm = document.getElementById('login-form');
    var registerForm = document.getElementById('register-form');

    // Agrega un event listener a la pestaña de inicio de sesión
    document.getElementById('tab-login').addEventListener('click', function () {
      // Muestra el formulario de inicio de sesión
      loginForm.style.display = 'block';
      // Oculta el formulario de registro
      registerForm.style.display = 'none';
    });

    // Agrega un event listener a la pestaña de registro
    document.getElementById('tab-register').addEventListener('click', function () {
      // Muestra el formulario de registro
      registerForm.style.display = 'block';
      // Oculta el formulario de inicio de sesión
      loginForm.style.display = 'none';
    });
  });
    </script>
</body>
</html>