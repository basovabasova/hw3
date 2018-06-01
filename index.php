<?php
    $continents = [
        'Australia' => ['Sarcophilus harrisii', 'Pteropus vampyrus', 'Macropus giganteus'],
        'Antarctica' => ['Euphausia superba', 'Aptenodytes forsteri'],
        'North America' => ['Sciurus vulgaris', 'Felis silvestris catus'],
        'South America' => ['Nesophontes edithae', 'Eleutherodactylus coqui'],
        'Africa' => ['Crocodylus niloticus', 'Potamochoerus porcus', 'Suncus etruscus']
    ];

    $continent = [];
    $first = [];
    $second = [];  
    $new = [];
    $crazy = [];
    $crazy_world =[];
    $arr_animals = [];
    
    foreach ($continents as $contenent_key => $world) {
        $continent[] = $contenent_key;
        foreach ($world as $key => $animals) {
            $a = str_word_count($animals);
            if ($a === 2) {            
                $animal = explode(' ', $animals);
                $new[] = $animal;                  
                $first[] = $animal[0];
                $second[] = $animal[1];
            }
        }
    }

    shuffle($second);

    for ($i=0; $i < count($new) ; $i++) { 
        $crazy[] = $first[$i] . ' ' . $second[$i];
    }

    foreach ($crazy as $value) {
        $first_word = explode(' ', $value);
        foreach ($continents as $contenent_key => $world) {
            foreach ($world as $animals) {
                $first_word_1 = explode(' ', $animals);
                if ($first_word[0] === $first_word_1[0]) {
                    $crazy_world[$contenent_key][] = $value;
                }
            }
        }
    }

    foreach ($crazy_world as $key => $animals) {
        $arr_animals[$key] = $animals;
    }

    foreach ($arr_animals as $key => $animals) {
        echo "<h2>$key</h2>";
        echo implode(', ', $animals);
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>hw3</title>
</head>
<body>
</body>
</html>