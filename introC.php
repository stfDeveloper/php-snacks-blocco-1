<!-- Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php 
$numbers = []
?>

<p>
<?php 
    for ($i=0; $i < 15 ; $i++) { 
        $rand = rand(0,100);
        if (!in_array ($rand,$numbers)) {
            $numbers[]=$rand;
            echo $rand .' ';
        }
    }
?>
</p>