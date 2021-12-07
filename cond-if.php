<?php

$func = "Ignez";
$sal = 8800;

if ($sal<5000) {
    echo "inss 9% <br>";
    $inss = $sal * (9/100);
    $salLiq = $sal-$inss;
    echo "O valor de inss é de: {$inss}<br>";
    echo "Salárioo Líquido: {$salLiq}";
} else {
    echo "inss 11%<br>";
    $inss = $sal * (11/100);
    $salLiq = $sal-$inss;
    echo "O valor de inss é de: {$inss}<br>";
    echo "Salárioo Líquido: {$salLiq}";
}


echo "<hr>";
echo "<h1>Acesso ao sistema</h1>";

$login = "ignez";
$senha = "data1";



if ($login=="ignez") {
    if ($senha=="data"){
        echo "conectado";
    } else{
        echo "senha invalida";
    }
} else {
    echo "login invalido";
}




