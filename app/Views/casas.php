<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Casas</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('/styl.css') ?>">
</head>
<body>
    <div class="container">
        <h1>Casas</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Consumo</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($casas) && !empty($casas)): ?>
                    <?php foreach ($casas as $casa): ?>
                        <tr>
                            <td><?= $casa['id_casas'] ?></td>
                            <td><?= $casa['nombre_casa'] ?></td>
                            <td><?= $casa['consumo'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3">No hay casas disponibles.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <button onclick="window.location.href='<?= base_url('casas/create') ?>'">Agregar Casa</button>
    </div>
</body>
</html>