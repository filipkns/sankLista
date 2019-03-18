<?php
require 'connectMySQL.php';


$upitusanklistu = "SELECT * FROM lista";
$result = mysqli_query($conn, $upitusanklistu);

//$sumpocetnoukupno="SELECT id ,(SUM(pocetno_stanje)+SUM(dodato)) FROM lista AS ukupno";
//$ubaciuukupno="INSERT INTO lista VALUES '" . $sumpocetnoukupno . "' WHERE ukupno";
//$ukupno = mysqli_query($conn,$ubaciuukupno);



echo "<table border = '1' >";
echo "<tr><td> ID </td><td> Ime pica </td><td> Pocetno stanje </td><td> Dodato </td><td> Ukupno </td><td> Krajnje stanje </td><td> Razlika </td><td> Cena </td><td> Kolicina </td><td>Ukupno novca</td><td> Datum </td></tr>";

while($row = mysqli_fetch_assoc($result)){
    echo "<tr><td> " . $row['id'] . "</td><td>" . $row['ime_pica'] . "</td><td>" . $row['pocetno_stanje'] . "</td><td>" . $row['dodato'] . "</td><td>" . $row['ukupno'] .   "</td><td> " . $row['krajnje_stanje'] . "</td><td>" . $row['razlika'] . "</td><td>" . $row['cena'] . "</td><td>" . $row['kolicina'] . "</td><td>" . $row['ukupno_novca'] . "</td><td>" . $row['datum'] . "</td></tr>" ;

}

?>
