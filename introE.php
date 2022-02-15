<!-- Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
<?php 
$alunni = [
     ["nome" => "Giulio", "cognome" => "Cesare", "voti" =>[6,7,5,8]],
     ["nome" => "Mattia", "cognome" => "Rossi", "voti" =>[3,8,3,6]],
     ["nome" => "Abdi", "cognome" => "Abdul", "voti" =>[2,4,3,5]],
     ["nome" => "Albert", "cognome" => "Heinstein", "voti" =>[9,8,9,10]],
]
?>

<p>
    <?php 
        for ($i=0; $i <count($alunni) ; $i++) { 
            $media = (array_sum($alunni[$i]["voti"]) /count($alunni[$i]["voti"]));
            echo $alunni[$i]["nome"]." ".$alunni[$i]["cognome"]." |Media=".$media."<br>";
        }    
    ?>
</p>