<?php

$peso = 75;
$altura = 1.73;

$imc = $peso/($altura*$altura);

if($imc<18.5){

    echo "você esta abaixo do peso";

} elseif($imc >=18.5 && $imc<=24.9){
    echo "você esta com o peso normal";

} elseif($imc>=25 && $imc<30){
    echo "você esta acima do peso";

} else {
    echo "você esta obeso";
}
 