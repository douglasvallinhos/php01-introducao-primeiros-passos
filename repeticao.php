<?php

$contador = 1;

while ($contador <= 15){
    echo "WHILE#$contador".PHP_EOL;
    $contador+= 1;
}

for ($contador2 = 1; $contador2 <=15; $contador2++){
    echo "FOR#$contador2".PHP_EOL;
}


// pular o contador numero 5
for ($contador2 = 1; $contador2 <=15; $contador2++){
    if($contador2 == 5){
        continue;
    }
    echo "FOR#$contador2".PHP_EOL;
}

// parar de rodar quando atingir o 5
for ($contador2 = 1; $contador2 <=15; $contador2++){
    if($contador2 == 5){
        break;
    }
    echo "FOR#$contador2".PHP_EOL;
}
