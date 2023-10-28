<!DOCTYPE html>
<html>
<head>
    <title>Seguimiento de Préstamo</title>
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
        <img src="../Img/MICRO.PNG.png" alt="Imagen de encabezado">
        <h1>Módulo de Búsqueda de Clientes Activos</h1>
    </div>
    <br>

   
    <form action="buscar_cliente.php" method="post" id="clienteForm">
        <label for="cliente_id">ID del Cliente:</label>
        <input type="text" id="cliente_id" name="cliente_id"><br><br>
        <button type="submit">Buscar</button>
    </form>
</body>
</html>