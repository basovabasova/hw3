<?php
    $continents = [
        'Australia' => ['Sarcophilus harrisii', 'Pteropus vampyrus', 'Macropus giganteus'],
        'Antarctica' => ['Euphausia superba', 'Aptenodytes forsteri'],
        'North America' => ['Sciurus vulgaris', 'Felis silvestris catus'],
        'South America' => ['Nesophontes edithae', 'Eleutherodactylus coqui'],
        'Africa' => ['Crocodylus niloticus', 'Potamochoerus porcus', 'Suncus etruscus']
    ];

    $first = [];
    $second = [];  
    $new = [];
    
    foreach ($continents as $world) {
        foreach ($world as $key => $animals) {
            $a = str_word_count($animals);
            if ($a === 2) {            
                $animals1 = explode(' ', $animals);
                $new[] = $animals1;                  
                $first[] = $animals1[0];
                $second[] = $animals1[1];
            }
        }
    }
    
    shuffle($second);
    
    $crazy = [];
    
    for ($i=0; $i < count($new); $i++) {
        $crazy[] = $first[$i] . ' ' . $second[$i];
    }

    $wow1 = [];
    $wow2 = [];
    $wow3 = [];
    $wow4 = [];
    $wow5 = [];
    
    array_push($wow1, $crazy[0], $crazy[1], $crazy[2]);
    array_push($wow2, $crazy[3], $crazy[4]);
    array_push($wow3, $crazy[5]);
    array_push($wow4, $crazy[6], $crazy[7]);
    array_push($wow5, $crazy[8], $crazy[9]);

    $wow = [
        'Australia' => $wow1,
        'Antarctica' => $wow2,
        'North America' => $wow3,
        'South America' => $wow4,
        'Africa' => $wow5
    ];

    foreach ($wow as $key => $value) {
        echo "<h2>$key</h2>";
        echo implode(', ', $value);
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>дз3</title>
</head>
<body>
</body>
</html>