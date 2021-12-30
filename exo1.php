<!--TP : Trouver 2 manières différentes de retourner une string -->


<!-- Méthode n°1 : -->

<?php 
    echo strrev("J'adoooore les sushis !"); 
?>

<!-- Méthode n°2 : -->

<?php
function mb_strrev($str){
    $r = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}

echo mb_strrev("J'adoooore les sushis !"); 
?>
    
