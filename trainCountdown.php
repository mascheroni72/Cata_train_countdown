<?php
/*
Un teclat de 9 digits.
10 digits a entrar.
L'objectiu per activar el fre és que, la suma dels 10 digits que introduim sumi tant com el nombre reflexat a 
la foto(67).
Cada cop que introduim un nombre, ens mostrar la suma parcial.
Però, això no és tot! Tenim un segon codi a desbloquejar! Funciona igual però...
Varia el nombre objectiu a obtenir.
No es mostra la suma parcial!*/
$NUM_STOP1 = 67;
$NUM_STOP2 = 81;
function stopTrain(int $codeStop, bool $showSum) : bool { 

    $numTry = 10;
    $sum = 0;
    $success = false;
        while ($numTry > 0) {
            $numUser = (int) readline("Introduce un número del 1 al 9 :") . PHP_EOL;
            $sum += $numUser;
            if($sum < $codeStop) {
                if($showSum) {
                echo "La suma parcial es: " . $sum . PHP_EOL;
            }
            }else if ($sum == $codeStop) {
                echo "Enhorabuena, has frenado el tren lleno de zombies" . PHP_EOL;
                $success = true;
                break;
            }
            else if ($sum > $codeStop) {
                echo "No has conseguido frenar el tren. Tu suma es mayor que el código para frenarlo: " . $codeStop . PHP_EOL;
                break;
            }
            $numTry --;
    
            if($numTry == 0 && $sum != $codeStop) {
                echo "Kua, kua, kua...has superado el número de 10 intentos sin adivinar el código de freno". PHP_EOL;
            }
            
}
            return $success;
}
echo "Comienza el juego. Tienes 10 intentos para adivinar el primer código y frenar el tren" . PHP_EOL;
$letsContinue = stopTrain($NUM_STOP1, true);
if($letsContinue) {
echo "¡Pero esto no ha acabado! Hay un segundo código que tienes que activar para parar definitivamente el tren" .PHP_EOL;   
stopTrain($NUM_STOP2, false);
}
?>