<?php
/*¿Qué es un número de Armstrong?
Un número de Armstrong es un número cuya suma de los cubos de sus dígitos es igual al número mismo. 
Por ejemplo, 153 es un número de Armstrong. Si tomas los dígitos de 153 individualmente y los elevas al cubo:
(1 × 1 × 1) + (5 × 5 × 5) + (3 × 3 × 3)
Luego agregue los resultados:
1+125+27
Obtendrás 153, el mismo número que el original*/

function checkNumberArmstrong($numCheck) : bool { 
    $sum = 0; 
    $x = $numCheck;

    while($x > 0) { 
        $digit = $x % 10; //obtención último digito a través del módulo.
        $sum += $digit*$digit*$digit;//suma de los cubos de los dígitos que se acumulan en la variable
        $x = $x/10; //al dividir por 10 elimina el último dígito y se queda con entero más bajo.
    }
    if ($numCheck == $sum) {
        return true;
     }else {
         return false;
     }
 } 
$numCheck = readline("Indique un número entero:");
$numArmstrong = checkNumberArmstrong($numCheck);
    if ($numArmstrong == $numCheck) {
    echo "Es un número Armstrong";
    }else {
     echo "no es un número Armstrong";
    }
    