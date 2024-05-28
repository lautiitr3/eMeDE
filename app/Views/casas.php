<!-- app/Views/casas/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Casas</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
</head>
<body>
    <div class="container">
        <h1>Casas</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($casas as $casa): ?>
                    <tr>
                        <td><?= $casa['id'] ?></td>
                        <td><?= $casa['nombre'] ?></td>
                        <td><?= $casa['direccion'] ?></td>
                        <td><?= $casa['precio'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <button onclick="window.location.href='<?= base_url('casas/create') ?>'">Agregar Casa</button>
    </div>
</body>
</html>