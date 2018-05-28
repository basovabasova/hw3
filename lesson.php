<?php
// строки
$a = 'Строка 1';
$b = "Строка 2 $a";
$c = "Строка 3 {$b}";
$d = <<<TEXT
something text
something text
something text
TEXT;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);

$e = 38 + "1";
echo "<br>";
var_dump($e);

$f = 'very good string';
$g = substr($f, 2, 5);
echo "<br>";
var_dump($f);
echo "<br>";
var_dump($g);

$h = str_replace('good', 'bad', $f);
echo "<br>";
var_dump($h);

$i = strpos($h, 'bad');
echo "<br>";
var_dump($i);
if ($i === false) {
    echo "bad' не найден в строке '$h'";
} else {
    echo "'bad' найден в строке '$h' в позиции $i" . '<br>';
}

$j = strlen($h);
var_dump($j);

$k = '<p>Параграф.</p><!-- Комментарий --> <a href="#fragment">Tекст</a>';
$l = strip_tags($k);
echo "<br>";
var_dump($l);
$m = strip_tags($k, '<p><a>');
echo "<br>";
var_dump($m);
echo "<br>";

$n = 'apple';
$o = md5($n);
var_dump($n);
echo "<br>";
var_dump($o);

// массивы
$p = [10, 11, 3, 14, 8];
echo "<br>";
var_dump($p);
echo "<br>";
echo $p;
echo "<br>";
print_r($p);

$r = [100 => 2, 200 => 4];
echo "<br>";
var_dump($r);
echo "<br>";
echo $r;
echo "<br>";
print_r($r[200]);

$s = ['name' => 'Victor', 'city' => 'SPb'];
echo "<br>";
var_dump($s);
echo "<br>";
echo $s;
echo "<br>";
print_r($s[name]);

$eggs[] = 'новое яйцо';
echo "<br>";
print_r($eggs);
$eggs[15] = 'уейн грецки';
echo "<br>";
print_r($eggs);
unset($eggs[15]);
echo "<br>";
print_r($eggs);
echo "<br>";

for ($i=0; $i<count($eggs); $i++)
{
    echo $eggs[$i] . '<br>';
}

for ($i=0; $i<count($p); $i++)
{
    echo $p[$i] . '<br>';
}

foreach ($s as $key => $value) {
  echo "$key: $value <br>";
}

$t = [];
foreach ($s as $value) {
  $t[] = $value; //"перепаковываем" ключи по порядку
}
echo "<br>";
print_r($t);

$cities = [
    "Россия" => ["Москва", "Санкт-Петербург", "Нижний Новгород"],
    "Германия" => ["Берлин", "Франкфурт", "Мюнхен"],
    "Франция" => ["Париж", "Марсель"]
];
echo "<br>";
echo $cities['Россия'][2] . '<br>'; 

foreach ($cities as $key => $value) {
  $country = $key;
  echo "<b>$country</b> <br>";
  foreach ($value as $city) {
    echo "$city <br>";
  }
}
echo "<br>";
$cities1 = [
    ["Москва", "Санкт-Петербург", "Нижний Новгород"],
    ["Берлин", "Франкфурт", "Мюнхен"],
    ["Париж", "Марсель"]
];

for ($i=0; $i < count($cities1); $i++) { 
    $row = $cities1[$i];
    for ($j=0; $j < count($row); $j++) { 
        $item = $row[$j];
        echo "$item <br>";
  }
}

$u = explode(' ', $h);
echo "<br>";
echo $u[1];

$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo "<br>";
echo $user; 
echo "<br>";
echo $pass;
echo "<br>";
echo $gid;
echo "<br>";
print_r(explode(':', $data, 3));
echo "<br>";
print_r(explode(':', $data, -2));
echo "<br>";
print_r(explode(' ', $data, -2));//Если delimiter не содержится в string, и используется отрицательный limit, то будет возвращен пустой массив (array)

//print_r(explode('', $data)); Если delimiter является пустой строкой (""), explode() возвращает FALSE.

echo "<br>";
var_dump(implode(',', $p));
echo "<br>";
var_dump(implode(',', array()));
echo "<br>";
echo is_array($s) ? 'Массив' : 'Не массив';
echo "<br>";
if (in_array("Victor", $s)) {
    echo "Нашел!"; //регистрозависима
}
echo "<br>";
print_r(array_keys($s));
echo "<br>";
print_r(array_shift($s));
echo "<br>";
print_r($s);
echo "<br>";
print_r(array_search('4', $r));

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