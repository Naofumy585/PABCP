<!DOCTYPE html>
<html>
<head>
    <title>Registro de Clientes y Otorgamiento de Préstamos</title>
    <style>
        body {
            background-color: #f0f0f0; /* Cambiar el color de fondo de la página */
            text-align: center; /* Centrar el contenido en la página */
        }

        h1 {
            color: #333; /* Cambiar el color del título principal */
        }

        .header {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #3498db; /* Cambiar el color de fondo del encabezado */
            padding: 20px;
        }

        .header img {
            width: 50px; /* Ajusta el ancho de la imagen */
            margin-right: 10px; /* Agrega un margen a la derecha de la imagen */
        }

        h2 {
            color: #333; /* Cambiar el color del subtítulo */
        }

        #clienteForm {
            background-color: #fff; /* Cambiar el color de fondo del formulario */
            padding: 20px;
            border-radius: 10px; /* Agregar bordes redondeados al formulario */
            text-align: left; /* Alinear el texto del formulario a la izquierda */
            width: 300px; /* Ajustar el ancho del formulario */
            margin: 0 auto; /* Centrar el formulario en la página */
        }

        label {
            display: block; /* Mostrar las etiquetas en líneas separadas */
            margin-top: 10px; /* Agregar espacio entre las etiquetas */
        }

        input {
            width: 100%; /* Ajustar el ancho de los campos de entrada al 100% del contenedor */
        }

        button {
            margin-top: 10px; /* Agregar espacio entre el último campo y el botón */
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="./Img/MICRO.PNG.png"  alt="Imagen de encabezado"> <!-- Reemplaza "tu-imagen.jpg" con la URL de tu imagen -->
        <h1>Registro de Clientes </h1>
    </div>

    <h2>Registrar un Nuevo Cliente</h2>
    <form id="clienteForm">
        <label for="nombre">Nombre del Cliente:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="nombre">ID de Cliente:</label>
        <input type="text" id="numero" name="cliente" required><br><br>
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required><br><br>
        <button type="submit">Registrar Cliente</button>
    </form>
</body>
</html>

