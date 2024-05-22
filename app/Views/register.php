<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('/style.css') ?>">
</head>
<body>
    <div class="container">
        <div class="title-container">
            <h2>Registro</h2>
        </div>
        <?php if (session()->getFlashdata('msg')): ?>
            <div>
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= site_url('register/store') ?>">
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div>
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" required>
            </div>
            <div>
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>

