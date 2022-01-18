<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$partite = [
    [
        "SquadraCasa" => "Dinamo",
        "PuntiCasa" => "88",
        "SquadraOspiti" => "Trento",
        "PuntiOspiti" => "80",       
    ],
    [
        "SquadraCasa" => "Pesaro",
        "PuntiCasa" => "85",
        "SquadraOspiti" => "Olimpia",
        "PuntiOspiti" => "82" 
    ],  
    [
        "SquadraCasa" => "Trieste",
        "PuntiCasa" => "83",
        "SquadraOspiti" => "Reggiana",
        "PuntiOspiti" => "85" 
    ],
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Risultati pallacanestro</title>
</head>
<body>
    
<?php 
    for ($i = 0; $i < count($partite); $i++){
        echo "<ul>
        <li> {$partite[$i]["SquadraCasa"]} - {$partite[$i]["SquadraOspiti"]} | {$partite[$i]["PuntiCasa"]}-{$partite[$i]["PuntiOspiti"]}
        </ul>";
    }
?>




</body>
</html>