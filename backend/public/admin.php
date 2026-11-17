<?php include '../includes/header.php'; ?>

<main class="cantina-login">
    <section class="login-targeta">
        <img src="img/logo.png" alt="" class="login-logo">

        <h1 id="login-titol">Benvingut/da</h1>
        <p class="login-instruccions">
            Accés reservat al personal de la cantina. Introdueix el teu usuari i contrasenya.
            Si no la recordes, contacta amb l'administrador.
        </p>

        <p class="login-error" role="alert">Usuari o contrasenya incorrectes.</p>

        <form class="login-formulari" action="admin.php" method="post">
            <label for="usuari">Usuari</label>
            <input type="text" id="usuari" name="usuari" autocomplete="username" required>

            <label for="contrasenya">Contrasenya</label>
            <input type="password" id="contrasenya" name="contrasenya" autocomplete="current-password" required>

            <button type="submit">Iniciar sessió</button>
        </form>

    </section>
</main>

<?php include '../includes/footer.php'; ?>