<!DOCTYPE html>
<html>
<head>
    <title>Generar Estado de Cuenta</title>
    <style>
        body {
            background-color: #f0f0f0;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .header {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #3498db;
            padding: 20px;
        }

        .header img {
            width: 50px;
            margin-right: 10px;
        }

        h2 {
            color: #333;
        }

        #clienteForm {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: left;
            width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
        }

        button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="./Img/MICRO.PNG.png" alt="Imagen de encabezado">
        <h1>Generar Estado de Cuenta</h1>
    </div>

  <br>
    <form id="clienteForm" action="generar_estado_cuenta.php" method="post">
        <label for="cliente_id">ID del Cliente:</label>
        <input type="text" id="cliente_id" name="cliente_id" required><br><br>
        <label for="nombre_cliente">Nombre del Cliente:</label>
        <input type="text" id="nombre_cliente" name="nombre_cliente" required><br><br>
        <button type="submit">Generar Reporte</button>
    </form>
</body>
</html>

