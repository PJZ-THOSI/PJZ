<?php include '../includes/header.php'; ?>

<main class="cantina-comandes">
    <section class="comandes-capcalera">
        <div>
            <h1>Tauler d'administració</h1>
            <p>Benvingut, <strong>admin</strong>.</p>
        </div>
        <form action="logout.php" method="post">
            <button type="submit" class="boto tancar-sessio">
                <i class="icona icona-sortir" aria-hidden="true"></i>
                Tancar sessió
            </button>
        </form>
    </section>

    <nav class="admin-pestanyes">
        <ul>
            <li>
                <a href="comandes.php" class="pestanya activa">
                    <i class="icona icona-tiquet" aria-hidden="true"></i>
                    Comandes
                    <span class="comptador">2</span>
                </a>
            </li>
            <li>
                <a href="productes.php" class="pestanya">
                    <i class="icona icona-caixa" aria-hidden="true"></i>
                    Productes
                    <span class="comptador">7</span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="taula-contenidor">
        <table class="taula-comandes">
            <thead>
                <tr>
                    <th scope="col">Núm. comanda</th>
                    <th scope="col">Client</th>
                    <th scope="col">Data</th>
                    <th scope="col">Articles</th>
                    <th scope="col">Total</th>
                    <th scope="col">Estat</th>
                    <th scope="col">Accions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code class="codi-comanda">C-20261112-170611-3B13</code></td>
                    <td>
                        <span class="client-nom">prova2</span>
                        <span class="client-correu">prova2@exemple.cat</span>
                    </td>
                    <td>
                        <time datetime="2026-11-12T17:06:11">
                            <span class="data-dia">2026-11-12</span>
                            <span class="data-hora">17:06:11</span>
                        </time>
                    </td>
                    <td>3</td>
                    <td class="total">3,50 €</td>
                    <td><span class="estat estat-pendent">Pendent</span></td>
                    <td><a href="tiquet.php?id=C-20261112-170611-3B13" class="boto">Veure tiquet</a></td>
                </tr>
                <tr>
                    <td><code class="codi-comanda">C-20261109-190038-FBF4</code></td>
                    <td>
                        <span class="client-nom">Pol Cervera</span>
                        <span class="client-correu">hola@exemple.cat</span>
                    </td>
                    <td>
                        <time datetime="2026-11-09T19:00:38">
                            <span class="data-dia">2026-11-09</span>
                            <span class="data-hora">19:00:38</span>
                        </time>
                    </td>
                    <td>1</td>
                    <td class="total">7,20 €</td>
                    <td><span class="estat estat-llest">Llest</span></td>
                    <td><a href="tiquet.php?id=C-20261109-190038-FBF4" class="boto">Veure tiquet</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

<?php include '../includes/footer.php'; ?>