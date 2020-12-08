<?php
require 'database.php';
?>
<!<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion contacts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

</body>
</html>
<div class="jumbotron">
    <h1 class="display-3">Ajouter un contact</h1>
    <p class="lead">Ceci est un espace de gestion de contacts NextAdvance.</p>
    <hr class="my-4">
    <p>&nbsp;</p>
    <form action="index.php" method="POST">
        <fieldset>
            <legend>Création contact</legend>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label>Nom</label>
                        <input type="text" class="form-control" name="nom" placeholder="Nom contact">
                    </div>
                    <div class="col-sm-6">
                        <label>Prenom</label>
                        <input type="text" class="form-control" name="prenom" placeholder="Prenom contact">
                    </div></div>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Telephone fixe</label>
                        <input type="text" class="form-control" name="num_fixe" placeholder="Num fixe contact">
                    </div>
                    <div class="col-sm-6">
                        <label>Telephone portable</label>
                        <input type="text" class="form-control" name="num_portable" placeholder="Num Portable contact">
                        <input type="hidden" name="utilisateur" value="1" />
                    </div></div>

        </fieldset>
        <div class="col text-center">
            <button type="submit" class="center-block text-center btn btn-primary">Crée le contact</button>
        </div>
        </fieldset>
    </form>
</div>


<pre>
<?php

print_r($_POST);

$db = Database::connect();

foreach($db->query('SELECT * from utilisateurs') as $row) {
    print_r($row);
}

?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>