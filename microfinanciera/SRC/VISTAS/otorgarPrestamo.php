<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otorgar Prestamos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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

        /* Estilos para el formulario */
        #loan-form {
            background-color: #fff; /* Cambiar el color de fondo del formulario */
            padding: 20px;
            border-radius: 10px; /* Agregar bordes redondeados al formulario */
            text-align: left; /* Alinear el texto del formulario a la izquierda */
            width: 300px; /* Ajustar el ancho del formulario */
            margin: 0 auto; /* Centrar el formulario en la página */
        }

        /* Estilos para los campos del formulario */
        label {
            display: block; /* Mostrar las etiquetas en líneas separadas */
            margin-top: 10px; /* Agregar espacio entre las etiquetas */
        }

        input {
            width: 100%; /* Ajustar el ancho de los campos de entrada al 100% del contenedor */
        }

        input[type="number"] {
            width: auto; /* Restablecer el ancho para el campo de número */
        }

        input[type="submit"] {
            margin-top: 10px; /* Agregar espacio entre el último campo y el botón */
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="./Img/MICRO.PNG.png" alt="Imagen de encabezado"> <!-- Reemplaza "tu-imagen.jpg" con la URL de tu imagen -->
        <h1>Otorgar Prestamos</h1>
    </div>
<br>
    <div style="text-align: center;">
        <form id="loan-form">
            <label for="client-name">Nombre del Cliente:</label>
            <input type="text" id="client-name" name="client-name" required>

            <label for="loan-amount">Monto del Préstamo:</label>
            <input type="number" id="loan-amount" name="loan-amount" min="1" max="5000" required>

            <label for="payment-frequency">Tipo de abono:</label>
            <select id="payment-frequency" name="payment-frequency" required>
                <option value="daily">Diario</option>
                <option value="weekly">Semanal</option>
                <option value="biweekly">Quincenal</option>
                <option value="monthly">Mensual</option>
            </select>

            <input type="submit" value="Otorgar Préstamo">
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
