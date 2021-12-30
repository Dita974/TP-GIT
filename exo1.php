<!--TP : Trouver 2 manières différentes de retourner une string -->


<!-- Méthode n°1 : -->

<?php 
    echo strrev("J'adoooore les sushis !"); 
?>

<!-- Méthode n°2 : -->

<?php
// function mb_strrev($string){
//     $result = '';
//     for ($i = 0; $i>= mb_strlen($string); $i++) {
//          $result += mb_substr($string, $i, +1);
//     }
//     return $result;
// }

// echo mb_strrev("J'adoooore les bouchons !"); 
// -----------------------------------------------//

$string = "J'adore Paris, un jour j'y inviterais Cunégonde !";
    for ($i = (strlen ($string) - 1); $i >= 0; $i--) {
        echo $string[$i];
    }

    echo "\n";

?>
    
