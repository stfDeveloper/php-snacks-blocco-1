<!-- Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare
“Accesso riuscito”, altrimenti “Accesso negato” -->
<?php 
 $name = $_GET["name"];
 $email = $_GET["email"];
 $age = $_GET["age"];
?>

<p>
<?php 
    if (strlen($name)>3){
        echo "Accesso riuscito";
    }else {
        echo "Accesso negato";
    }
?>
</p>

<p>
<?php 
    if ((strpos($email, '.') !==false) 
    &&
    (strpos($email, '@') !== false))
    {
        echo "Accesso riuscito";
    }else {
        echo "Accesso negato";
    }
?>
</p>

<p>
<?php 
    if (is_numeric($age)) 
    {
        echo "Accesso riuscito";
    }else {
        echo "Accesso negato";
    }
?>
</p>

