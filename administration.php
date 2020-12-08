<!doctype html>
<html>
<head>
    <title>Administration des contacts</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width:device-width, initial-scale:1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Holtwood+One+SC" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<h1 class="text-logo"> Gestion des contacts </h1>

<div class="container admin">
    <div class="row">
        <h1><strong>Liste des contacts </strong>
            <a href="index.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span> Ajouter</a>
            <a href="index.php" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-eye-open"></span> Voir les contacts</a>
        </h1>


        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>email</th>
                <th>numero</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
            require 'database.php';
            $db = Database::connect();
            $statement = $db->query("SELECT utilisateurs.id, utilisateurs.nom, utilisateurs.email, utilisateurs.numero, categories.name AS category FROM items LEFT JOIN categories ON items.category = categories.id ORDER BY items.id DESC");
            while ($item =  $statement->fetch())
            {
                echo '<tr>';
                echo '<td>'. $item["name"] .'</td>';
                echo '<td>'.$item["description"].'</td>';
                echo '<td>'. number_format((float)$item["price"],2,'.','') .'</td>';
                echo '<td>'.$item["category"].'</td>';
                echo '<td width=300>';
                echo '<a class="btn btn-default" href="view.php?id=' . $item['id'] . '"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';
                echo ' ';
                echo '<a class="btn btn-primary" href="update.php?id='. $item['id'] .'"><span class="glyphicon glyphicon-pencil"></span> Modifer</a>';
                echo ' ';
                echo '<a class="btn btn-danger" href="delete.php?id=' . $item['id'] .'"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>';
                echo '</td>';
                echo '</tr>';
            }
            Database::disconnect();

            ?>

            </tbody>
        </table>
    </div>
</div>
</body>


</html>
