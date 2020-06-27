<?php

$idade = 15;
$acompanhado = true;
echo "Você só pode entrar se for mair do que 18 anos. Ou apartir de 16 anos acompanhado". PHP_EOL;
if($idade >= 18){
    echo "Você tem $idade anos, pode entrar :)". PHP_EOL;
}else if($idade >=16 && $acompanhado = true){
    echo "Você tem $idade anos, mas está acompanhado, pode entrar :)". PHP_EOL;
}else{
    echo "voce tem $idade anos, é menor de 16 anos ou não está acompanhado, NÃO PODE ENTRAR! :(". PHP_EOL;

}


