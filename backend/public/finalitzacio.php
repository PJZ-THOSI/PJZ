<?php include '../includes/header.php'; ?>

<main class="cantina-finalitzacio">

    <div class="finalitzacio-capcalera">
        <h1>Finalitzar compra</h1>
        <p>Revisa el teu tiquet i omple les teves dades.</p>
    </div>

    <p class="finalitzacio-exit">Comanda enviada correctament. Gràcies!</p>

    <div class="finalitzacio-contingut">

        <section class="finalitzacio-resum">
            <div class="resum-capcalera">
                <h2>Resum de la comanda</h2>
                <a href="compra.php" class="resum-modificar">Modificar</a>
            </div>

            <table class="resum-taula">
                <thead>
                    <tr>
                        <th>Producte</th>
                        <th>Quantitat</th>
                        <th>Preu</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nom del producte</td>
                        <td>1</td>
                        <td>0,00 €</td>
                        <td>0,00 €</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3">Total</th>
                        <td>0,00 €</td>
                    </tr>
                </tfoot>
            </table>
        </section>

        <section class="finalitzacio-dades">
            <h2>Les teves dades</h2>
            <form action="finalitzacio.php" method="post" class="dades-formulari">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" required>

                <label for="telefon">Telèfon</label>
                <input type="tel" id="telefon" name="telefon" required>

                <label for="correu">Correu electrònic</label>
                <input type="email" id="correu" name="correu" required>

                <button type="submit" class="boto-confirmar">Confirmar comanda</button>
            </form>
            <p class="dades-avis">
                En confirmar la comanda acceptes les <a href="condicions.php">condicions legals</a>.
            </p>
        </section>

    </div>

</main>

<?php include '../includes/footer.php'; ?>