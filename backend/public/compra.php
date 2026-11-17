<?php include '../includes/header.php'; ?>

<main class="cantina-compra">

    <section class="compra-productes">
        <div class="compra-capcalera">
            <div class="compra-titols">
                <h1>Comprar</h1>
                <p>Tria els productes i afegeix-los al teu tiquet.</p>
            </div>
            <p class="compra-franja">Esmorzar · 8:00 – 11:00</p>
        </div>

        <nav class="compra-filtres">
            <a href="compra.php" class="filtre actiu">Tots</a>
            <a href="compra.php?categoria=categoria" class="filtre">Categoria</a>
        </nav>

        <div class="compra-graella">

            <article class="targeta-producte">
                <img src="" alt="Nom del producte" class="targeta-imatge">
                <div class="targeta-cos">
                    <p class="targeta-categoria">Categoria</p>
                    <h2 class="targeta-titol">Nom del producte</h2>
                    <p class="targeta-descripcio">Descripció del producte.</p>
                    <p class="targeta-alergens">Al·lèrgens: </p>
                    <div class="targeta-peu">
                        <span class="targeta-preu">0,00 €</span>
                        <form action="compra.php" method="post">
                            <input type="hidden" name="accio" value="afegir">
                            <input type="hidden" name="id" value="">
                            <button type="submit" class="boto-afegir">Afegir</button>
                        </form>
                    </div>
                </div>
            </article>

        </div>
    </section>

    <aside class="compra-tiquet">
        <div class="tiquet-capcalera">
            <i class="icona icona-tiquet"></i>
            <h2>El teu tiquet</h2>
            <span class="tiquet-quantitat">0 productes</span>
            <button>Buidar ticket</button>
        </div>

        <ul class="tiquet-llista">
            <li>
                <i class="icona icona-item"></i>
                <span>Platano</span>
                <span>Precio€</span>
                <span>Total€</span>
                <button>Eliminar</button> <!--Temporal-->
            </li>
        </ul>

        <p class="tiquet-buit">Encara no has afegit cap producte.</p> <!--Activa y desactiva-->

        <div class="tiquet-total">
            <span>Total</span>
            <span class="total-preu">0,00 €</span>
        </div>

        <a href="finalitzacio.php" class="boto-finalitzar">Finalitzar compra</a>
    </aside>

</main>

<?php include '../includes/footer.php'; ?>