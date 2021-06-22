<?php include_once './autoload.php'; ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liste des bars</title>
    </head>
    <body>
        <form action="" method="post">
            <h1>Effectuer une commande</h1>
            <div>
                <label for="idBar">Id du bar</label>
                <input type="text" name="idBar" id="idBar" value="<?php echo $_GET['id'] ?>">
            </div>

            <div>
                <label for="drink">Boisson</label>
                <input type="text" name="drink" id="drink">
            </div>

            <div>
                <label for="price">Prix</label>
                <input type="number" name="price" id="price">
            </div>

            <div>
                <button type="submit">Ajouter</button>
            </div>
        </form>

        <?php
        $db = new PDO('mysql:host=localhost;dbname=tp_data', 'root', 'Monopoli@74');

        if (isset($_POST['drink']) && isset($_POST['price']))
        {
            echo $_POST['drink'];
            echo $_POST['price'];
            $br = new Commande([
                'idBar' => $_POST['idBar'],
                'boisson' => $_POST['drink'],
                'prix' => $_POST['price']
            ]);
            $bm = new CommandeManager($db);
            $b  = $bm->add($br);
        }
        
        $barManager = new BarManager($db);
        $bar = $barManager->get($_GET['id']);
        ?>

        <form action="" method="post">
            <h1>Modifier le bar <?php echo $bar->getName() ?></h1>
            <div>
                <label for="name">Nom du bar</label>
                <input type="text" name="name" id="name" value="<?php echo $bar->getName(); ?>">
            </div>

            <div>
                <label for="address">Adresse du bar</label>
                <input type="text" name="address" id="address" value="<?php echo $bar->getAddress(); ?>">
            </div>

            <div>
                <label for="type">Type de bar</label>
                <input type="text" name="type" id="type" value="<?php echo $bar->getType(); ?>">
            </div>

            <div>
                <button type="submit">Modifier</button>
            </div>
        </form>
    </body>
</html>