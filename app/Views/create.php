<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agregar Casa</title>
</head>
<body>
    <h1>Agregar Casa</h1>
    <form action="<?= base_url('casas/store') ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br>

        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" required><br>

        <button type="submit">Agregar Casa</button>
    </form>
</body>
</html>