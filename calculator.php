<?php
echo("Welke operatie wil je uitvoeren? (+, -) ");

$som = readline();

if ($som == "+"){
    echo("getal nummer 1? ");
    $getal1 = readline();
    echo("en getal nummer 2? ");
    $getal2 = readline();
    echo (int) ($getal1+$getal2);
}
elseif ($som = "-"){
    echo ("getal nummer 1? ");
    $getal3 = readline();
    echo("en getal nummer 2? ");
    $getal4 = readline();
    echo (int) ($getal3-$getal4);
}
else {
    echo("tja dat kan niet");
}

?>

