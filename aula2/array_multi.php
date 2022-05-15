<?php
/*$array  = [[5,3,7], [2,9,6], [10,11,12]];

echo $array[0][2]; // [0] representa o 1° conjunto do vetor, [2] o indice do vetor
echo '</br>';
echo $array[1][0];  // [1] representa o 2° conjunto do vetor, [0] o indice do vetor
*/
$array = [

    [
        [4, 6, 0],
        [3, 7, 2]
    ],
    //Indice 1
    [
    // Indice 0 
        [2, 8, 5],
        [1, 9, 3]
    ]
];
echo $array[1][0][2];
?>