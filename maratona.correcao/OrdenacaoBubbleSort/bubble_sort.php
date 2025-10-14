<?php
$vetor = [5, 3, 8, 4, 2];
$n = count($vetor);
for ($i = 0; $i < $n - 1; $i++){
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($vetor[$j] > $vetor[$j + 1]) {
            //troca os elementos
            $temp = $vetor[$j];
            $vetor[$j] = $vetor[$j + 1];
            $vetor[$j + 1] = $temp;
        }
    }
}
print_r($vetor);
?>