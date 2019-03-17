<?php
require 'connectMySQL.php';


//$sql = "SELECT * FROM lista";
//$result= mysqli_query($conn, $sql);
//
//echo "<table border = '1' >";
//echo "<tr><td> Ime pica </td><td> Pocetno stanje </td><td> Dodato </td><td> Ukupno </td><td> Krajnje stanje </td><td>"
//. "Razlika </td><td> Cena </td><td> Ukupno novca </td> ";
//while($row = mysqli_fetch_assoc($result)){
//    echo "<tr><td> " . $row['ime_pica'] . "</td><td>" . $row['pocetno_stanje'] . "</td><td>" . $row['dodato'] . "</td><td>"
//            . $row['ukupno'] . "</td><td>" . $row['krajnje_stanje'] . "</td><td>" . $row['razlika'] . "</td><td>"
//            . $row['cena'] . "</td><td>" . $row['ukupno_novca'] .  "</td>"   ;
//
//
//}
$upitusanklistu = "SELECT dnevna_sank_lista.id_pica, pica.ime_pica, dnevna_sank_lista.krajnje_stanje, pica.zapremina, dnevna_sank_lista.datum
FROM dnevna_sank_lista
INNER JOIN pica ON pica.id=dnevna_sank_lista.id_pica";
$result = mysqli_query($conn, $upitusanklistu);

echo "<table border = '1' >";
echo "<tr><td> id_pica </td><td> ime_pica </td><td> krajnje_stanje </td><td> zapremina </td><td> datum </td></tr>";

while($row = mysqli_fetch_assoc($result)){
    echo "<tr><td> " . $row['id_pica'] . "</td><td>" . $row['ime_pica'] . "</td><td>" . $row['krajnje_stanje'] . "</td><td>"
            . $row['zapremina'] .   "</td><td> " . $row['datum'] . "</td></tr>" ;
}

?>
