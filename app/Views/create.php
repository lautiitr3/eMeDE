<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Casas</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
</head>
<body>
    <div class="container">
        <h1>Agregar Casas</h1>
        <form action="<?= base_url('casas/store') ?>" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required><br>

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" required><br>

            <button onclick="window.location.href='<?= base_url('casas/create') ?>'">Agregar Casa</button>
        </form>
</body>
</html>