<main>
    <h2>Liste des clients</h2>
    <?php
    if ($clients) {
        ?>
        <button class="btn btn-primary" onclick="window.location.href='?page=purge'">vider les clients</button>
        <table>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Âge</th>
                <th>Solde du compte</th>
            </tr>
            <?php
            foreach ($clients as $client) {
                ?>
                <tr>
                    <td><?= $client->getNom() ?></td>
                    <td><?= $client->getPrenom() ?></td>
                    <td><?= $client->getAge() ?></td>
                    <td><?= $client->getCompteBancaire()->getSolde() ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
    } else {
        ?>
        <p>Aucun client</p>
        <?php
    }

    ?>
</main>