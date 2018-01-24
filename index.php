<?php include 'partieQuery.php'; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Exercice 1 Correction</title>
    </head>
    <body>
        <h1>Correction de l'exercice1</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Age</th>
                    <th>Carte</th>
                    <th>Numéro de carte</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customersList AS $customers) { ?>
                    <tr>
                        <td><?= $customers->id; ?></td>
                        <td><?= $customers->lastName; ?></td>
                        <td><?= $customers->firstName; ?></td>
                        <td><?= $customers->birthDate; ?></td>
                        <td><?= $customers->age; ?></td>
                        <td><?= $customers->card; ?></td>
                        <td><?= $customers->cardNumber; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>