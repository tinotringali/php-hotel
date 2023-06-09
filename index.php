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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>

<body>
    <div class="container">
        <form action="index.php">
            <div class="mt-3">
                <input type="text" name="parking" class="form-control" placeholder="ricerca">
                <input class="btn btn-primary my-2" type="submit" value="Cerca">
            </div>
        </form>
    </div>
    <table class="table table-info">
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col">parking</th>
                <th scope="col">vote</th>
                <th scope="col">distance_to_center</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($hotels as $key => $hotel) { ?>
                <tr>
                    <td> <?php echo $hotel['name']; ?></td>
                    <td> <?php echo $hotel['description']; ?></td>
                    <td> <?php echo $hotel['parking']; ?></td>
                    <td> <?php echo $hotel['vote']; ?></td>
                    <td> <?php echo $hotel['distance_to_center']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>