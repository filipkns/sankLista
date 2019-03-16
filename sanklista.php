<?php
require 'connectMySQL.php';

$sql = "SELECT * FROM lista";
$result= mysqli_query($conn, $sql);

echo "<table border = '1' >";
echo "<tr><td> Ime pica </td><td> Pocetno stanje </td><td> Dodato </td><td> Ukupno </td><td> Krajnje stanje </td><td>"
. "Razlika </td><td> Cena </td><td> Ukupno novca </td> ";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr><td> " . $row['ime_pica'] . "</td><td>" . $row['pocetno_stanje'] . "</td><td>" . $row['dodato'] . "</td><td>"
            . $row['ukupno'] . "</td><td>" . $row['krajnje_stanje'] . "</td><td>" . $row['razlika'] . "</td><td>"
            . $row['cena'] . "</td><td>" . $row['ukupno_novca'] .  "</td>"   ;
    
    
}


?>
