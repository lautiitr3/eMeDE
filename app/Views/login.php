<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('/style.css') ?>">
</head>
<body>
    <div class="container">
        <div class="title-container">
            <h2>Login</h2>
        </div>
        <?php if (session()->getFlashdata('msg')): ?>
            <div>
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= site_url('login/authenticate') ?>">
            <div>
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Ingresar</button>
        </form>
        <div>
            <p>¿No tienes una cuenta? <a href="<?= site_url('register') ?>">Regístrate</a></p>
        </div>
    </div>
</body>
</html>

