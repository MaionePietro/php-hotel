<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    $voto = $_GET['voto'];
    $park = isset($_GET['parcheggio']) ? true : false;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="">
    <div class="container">
        <form action="" method="GET" class="d-flex justify-content-evenly align-items-center">
            <select class="form-select w-25" multiple aria-label="multiple select example" name="voto">
                <option selected>Seleziona voto</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3+</option>
            </select>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="parcheggio">
                <label class="form-check-label" for="exampleCheck1">Parcheggio</label>
            </div>
            <button type="button" class="btn btn-primary">Cerca</button>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>Descrizione</td>
                    <td>Parcheggio</td>
                    <td>voto</td>
                    <td>Km dal centro</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($hotels as $hotel){
                        //var_dump($hotel);
                        ?>
                        <tr>
                            <?php
                            foreach($hotel as $info){
                                //var_dump($info);
                                ?>
                                    <td> <?php echo $info; ?> </td>
                                <?php
                            };
                        ?>
                        </tr>
                        <?php
                    };
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>