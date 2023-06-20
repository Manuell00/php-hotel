<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Inserisco il title -->
    <title>Php-hotel</title>

    <!-- Inserisco una icon -->


    <!-- Inserisco la cdn di Bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


<!-- Inserisco i miei dati -->
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

    // Creo un array vuoto dove inserire le chiavi
    $keys = [];

    // Inserisco le chiavi per ogni array associativo
    foreach ($hotels as $hotel) {
        foreach ($hotel as $key => $value) {
            if (!in_array($key, $keys)) {
                $keys[] = $key;
            }
        }
    };

?>

<!-- Inserisco un container -->
<div class="container">

    <!-- Creo la tabella -->
    <table class="table">
        <!-- Creo la riga di header dell tabella -->
        <thead>
            <tr>
                <!-- Ciclo con php all'interno dell'array $keys -->
                <?php
                    foreach ($keys as $key){
                        echo "<th scope = 'col'>".$key."</th>";
                    }
                ?>
            </tr> 
        </thead>

        <!-- Apro il body della table -->
        <tbody>
            
                <!-- Ciclo con php all'interno dell'array $keys -->
                <?php
                    foreach ($hotels as $hotel) {
                        echo "<tr>";
                        foreach ($hotel as $key => $value) {
                            echo "<td>" . $hotel[$key] . "</td>";
                        }
                        echo "</tr>";
                    };
                 ?>
        </tbody>
    
    
    </table>

</div>

    
</body>
</html>


