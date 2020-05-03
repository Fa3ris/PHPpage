<?php

echo "Hello World !\n";

/* infos sur le système
 phpinfo(); */

$foo = 2;

if ($foo > 1) {
    echo "2 > 1\n";
}

$tab = [1, 2, 3];

echo "$tab[0]\n";


for ($i = 0; $i < 10; $i++) {
    echo $i . "\n";
}


$tabForEach = [15, 45, 787, 34, 64];

foreach ($tabForEach as $item) {
    echo $item . "\n";
}


$object1 = [
    [
        "name" => "Hiro",
        "lastname" => "Nii"
    ],
    [
        "name" => "02",
        "lastname" => "Last"
    ],
    [
        "name" => "Yoh",
        "lastname" => "Asakura"
    ]
];


foreach ($object1 as $row) {
    foreach ($row as $key => $value) {
        echo "$key - $value\n";
    }
}

function bar(string $name): void
{
    echo "$name\n";
}

bar(1231);

function by2(int $value): int
{
    return $value * 2;
}

$result = by2(4);
echo "$result";

/*  start PHP Server
 php -S localhost:8080
 */

?>

 <?= "Hello" ?>