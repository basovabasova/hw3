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
echo '<pre>';
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

$e = 38 + "1";
var_dump($e);

$f = 'very good string';
$g = substr($f, 2, 5);
var_dump($f);
var_dump($g);

$h = str_replace('good', 'bad', $f);
var_dump($h);

$i = strpos($h, 'bad');
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
var_dump($l);
$m = strip_tags($k, '<p><a>');
var_dump($m);

$n = 'apple';
$o = md5($n);
var_dump($n);
var_dump($o);

// массивы
$p = [10, 11, 3, 14, 8];
var_dump($p);
echo $p;
print_r($p);

$r = [100 => 2, 200 => 4];
var_dump($r);
echo $r;
print_r($r[200]);

$s = ['name' => 'Victor', 'city' => 'SPb'];
var_dump($s);
echo $s;
print_r($s[name]);

$eggs[] = 'новое яйцо';
print_r($eggs);
$eggs[15] = 'уейн грецки';
print_r($eggs);
unset($eggs[15]);
print_r($eggs);

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
print_r($t);

$cities = [
    "Россия" => ["Москва", "Санкт-Петербург", "Нижний Новгород"],
    "Германия" => ["Берлин", "Франкфурт", "Мюнхен"],
    "Франция" => ["Париж", "Марсель"]
];
echo $cities['Россия'][2] . '<br>'; 

foreach ($cities as $key => $value) {
  $country = $key;
  echo "<b>$country</b> <br>";
  foreach ($value as $city) {
    echo "$city <br>";
  }
}

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
echo $u[1];

$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; 
echo $pass;
echo $gid;
print_r(explode(':', $data, 3));
print_r(explode(':', $data, -2));
print_r(explode(' ', $data, -2));//Если delimiter не содержится в string, и используется отрицательный limit, то будет возвращен пустой массив (array)

//print_r(explode('', $data)); Если delimiter является пустой строкой (""), explode() возвращает FALSE.

var_dump(implode(',', $p));
var_dump(implode(',', array()));
echo is_array($s) ? 'Массив' : 'Не массив';
if (in_array("Victor", $s)) {
    echo "Нашел!"; //регистрозависима
}
print_r(array_keys($s));
print_r(array_shift($s));
print_r($s);
print_r(array_search('4', $r));

//cписки

$row = ['Victor', 'SPb'];
list($name, $city) = $row;
var_dump($name);
var_dump($city);

//ресурсы

$v = fopen('animals.php', 'r');
var_dump($v);

$w = fread($v, 1024);
print_r($w);

//объекты


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