<!--Lussiez Julien / Amiens-->
<?php 

// Exo1
    $dc_heroes = array(
        '01' => [
            'Prénom' => 'Diana',
            'Nom' => 'Prince',
            'Alias' => 'Wonderwoman',
            'Gender' => 'Female'],
        
        '02' => [
            'Prénom' => 'Bruce',
            'Nom' => 'Wayne',
            'Alias' => 'Batman',
            'Gender' => 'Male'],
    
        '03' => [
            'Prénom' => 'Clark',
            'Nom' => 'Kent',
            'Alias' => 'Superman',
            'Gender' => 'Male'],
    
        '04' => [
            'Prénom' => 'Selina',
            'Nom' => 'Kyle',
            'Alias' => 'Catwoman',
            'Gender' => 'Female']
    );

function displayCharacters(array $characters, string $Gender){
    // if ($characters != null){
    // }
}

// Exo2

date_default_timezone_set('Europe/Paris');
$current_date = date('d/m/y');
$date = new DateTime();
$nextfriday13 = new DateTime('2023-10-13');
$diff = date_diff($date,$nextfriday13);


// Exo3
$poids=1;
$taille=1;
$calcul= $poids / ($taille*$taille);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1>Exercice 1 :</h1>
<?php
    var_dump($dc_heroes);
?>
    <h1>Exercice 2 :</h1>
    <?php
    // Exo2
    echo($current_date);
    echo('<br></br>');
    ?>
    <p>Nombre de jours avant le prochain vendredi 13 : <?= $diff->days;?> jours </p>
    <?php

    // Exo3
    ?>
    <h1>Exercice 3 :</h1>
    <form>
        <label name="poids">Poids :</label>
        <input type='text' name='poids'>
        <label name='taille'>Taille :</label>
        <input type='text' name='taille'>
        <button type='submit'>Calcul</button>
    </form>
</body>

</html>