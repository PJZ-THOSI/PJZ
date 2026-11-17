<?php include '../includes/header.php'; 

require_once '../includes/funcions.php';
$productes = carregarProductes();
?>

<main class="cantina-productes">

    <nav class="admin-pestanyes">
        <ul>
            <li>
                <a href="comandes.php" class="pestanya">
                    <i class="icona icona-tiquet"></i>
                    Comandes
                    <span class="comptador">2</span>
                </a>
            </li>
            <li>
                <a href="productes.php" class="pestanya">
                    <i class="icona icona-caixa"></i>
                    Productes
                    <span class="comptador">7</span>
                </a>
            </li>
        </ul>
    </nav>

    <section class="productes-capcalera">
        <h1>Gestió de productes</h1>
        <p>Afegeix, elimina i edita productes</p>
    </section>

    <section class="productes-panell">
        <h2>Nou producte</h2>
        <form action="productes.php" method="post">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom">
            <label for="descripcio">Descripció</label>
            <input type="text" id="descripcio" name="descripcio">
            <label for="preu">Preu</label>
            <input type="number" id="preu" name="preu" min="0" step="0.01">
            <label for="url">URL de la imatge</label>
            <input type="text" id="url" name="url">

            <label for="esmorzar">Esmorzar</label>
            <input type="checkbox" id="esmorzar" name="esmorzar">
            <label for="berenar">Berenar</label>
            <input type="checkbox" id="berenar" name="berenar">
            <label for="dinar">Dinar</label>
            <input type="checkbox" id="dinar" name="dinar">

            <button type="submit">Afegir producte</button>
        </form>
    </section>

    <section class="productes-llista">
        <h2>Productes</h2>

        <table class="producte-card">
            <thead>
                <tr>
                    <th></th>
                    <th>Nom</th>
                    <th>Preu</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="icona icona-producte"></i></td>
                    <td class="producte-nom">Patates</td>
                    <td class="producte-preu">2.99</td>

                    <td>
                        <form action="productes.php" method="post">
                            <button type="submit" class="boto-suprimir"><span class="text-amagat">Eliminar</span></button>
                        </form>
                    </td>

                    <td>
                        <form action="productes.php" method="get">
                            <button type="submit" class="boto-editar"><span class="text-amagat">Editar</span></button>
                            <input type="hidden" name="id" value="1">
                        </form>
                    </td>

                </tr>
            </tbody>
        </table>

    </section>

</main>
<?php include '../includes/footer.php'; ?>