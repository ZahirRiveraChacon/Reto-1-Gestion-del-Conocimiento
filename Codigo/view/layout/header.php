<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <title>Aergibide Forum</title>
    <link rel="icon" type="image/svg+xml" href="assets/svg/logo.svg"/>
    <link rel="stylesheet" href="assets/css/header.css">
</head>
<body>
<header class="header">
    <div class="header-section logo-section">
        <a href="index.php?controller=preguntas&action=list_paginated" class="logo-link" style="display: flex; align-items: center; text-decoration: none;">
            <img src="assets/svg/logo.svg" alt="Logo" class="logo">
            <h3>AERGIBIDE</h3>
        </a>
    </div>

    <div class="header-section icons-section">
        <a href="index.php?controller=notificaciones&action=viewNotifications">
            <img src="assets/svg/bell-regular.svg" alt="Notification" class="header-icon">
        </a>
        <div class="dropdown">
            <img src="assets/svg/user-solid.svg" alt="User" class="header-icon profile-icon" onclick="toggleDropdown(event)">
            <div id="userDropdown" class="dropdown-content">
                <a href="index.php?controller=usuario&action=viewProfile">Ver Perfil</a>
                <a href="index.php?controller=ajustes&action=viewSettings">Configuración</a>
                <a href="index.php?controller=ayuda&action=viewAyuda">Ayuda</a>
                <?php if (isset($_COOKIE['puesto_usuario']) && $_COOKIE['puesto_usuario'] === 'Admin'): ?>
                    <a href="index.php?controller=admin&action=viewProfileAdmin">Panel Administrador</a>
                <?php endif; ?>

                <a href="index.php?controller=usuario&action=logout">Cerrar Sesión</a>
            </div>
        </div>
    </div>
</header>
<script src="assets/js/header.js"></script>
<script src="assets/js/lightMode.js"></script>
</body>
</html>
