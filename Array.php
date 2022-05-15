<?php

$vetor = ['20', '21', '22', '18', '15', '54'];

for ($contador = 0; $contador < 6; $contador++) {
    echo "Numero $contador: "  . $vetor[$contador] . "<br/>";
}

echo "<br/>" . "Total de itens: " . count($vetor);

 