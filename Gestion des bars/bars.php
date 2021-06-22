<?php include_once './autoload.php'; ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liste des bars</title>
        <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        </style>
    </head>
    <body>
        <form action="" method="post">
            <h1>Ajouter un bar</h1>
            <div>
                <label for="name">Nom du bar</label>
                <input type="text" name="name" id="name">
            </div>

            <div>
                <label for="address">Adresse du bar</label>
                <input type="text" name="address" id="address">
            </div>

            <div>
                <label for="type">Type de bar</label>
                <input type="text" name="type" id="type">
            </div>

            <div>
                <p style="display: hiddent;">Erreur, vous n'avez pas tous saisis</p>
            </div>

            <div>
                <button type="submit">Ajouter</button>
            </div>
        </form>

        <?php
        $db = new PDO('mysql:host=localhost;dbname=tp_data', 'root', 'Monopoli@74');

        if (isset($_POST['name']) && isset($_POST['address']) && isset($_POST['type'])) {
            $br = new Bar([ 
                'name' => $_POST['name'],
                'address' => $_POST['address'],
                'type' => $_POST['type']
            ]);
            $bm = new BarManager($db);
            $b  = $bm->add($br);
        }
        
        $barManager = new BarManager($db);
        $bars = $barManager->getAll();
        ?>

        <h1>Liste des bars</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($bars as $bar) { ?>
            <tr>
                <td><?php echo $bar->getId(); ?></td>
                <td><?php echo $bar->getName(); ?></td>
                <td><?php echo $bar->getAddress(); ?></td>
                <td><?php echo $bar->getType(); ?></td>
                <td>
                    <a href="bar-commande.php?id=<?php echo $bar->getId() ?>">Modifier</a>
                    <a href="delete.php?id=<?php echo $bar->getId() ?>&name=<?php echo $bar->getName(); ?>&address=<?php echo $bar->getAddress(); ?>&type=<?php echo $bar->getType(); ?>">Supprimer</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </body>
</html>