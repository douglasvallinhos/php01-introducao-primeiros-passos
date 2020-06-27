<?php
$peso = 75.5;
$altura = 1.85;
$imc = $peso / ($altura ** 2);
echo "$imc".PHP_EOL;

if ($imc < 18.5){
    echo "ABAIXO DO PESO!";
}elseif( $imc <= 24.9){
    echo "PESO IDEAL (PARABÉNS)";
}elseif($imc <= 29.9){
    echo "LEVEMENTE ACIMA DO PESO";
}elseif($imc <= 34.9){
    echo "OBESIDADE GRAU I";
}elseif($imc <= 39.9){
    echo "OBESIDADE GRAU II (SEVERA)";
}elseif ($imc >= 40){
    echo "OBESIDADE III (MÓRBIDA)";
}
