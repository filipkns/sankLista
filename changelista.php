<?php
$values = "SELECT ime_pica FROM lista ";
$values1 = mysqli_query($conn, $values);
$option = '';

while ($row = mysqli_fetch_assoc($values1)) {

    $option .= '<option value = "' . $row['ime_pica'] . '">' . $row['ime_pica'] . '</option>';
};

?>

    <form action="index.php" method="post">
        <select name="pice1" plaseholder="izmeni">
            <option value="">Izaberi pice</option>
            <?php echo $option; ?><br>

        </select> <br>
        Pocetno stanje : <input type="text" name="pocetnostanje1"><br>
        Dodato : <input type="text" name="dodato1"><br>
        Krajnje stanje : <input type="text" name="krajnjestanje1"><br>
        Cena : <input type="text" name="cena1"><br>
        Kolicina : <input type="text" name="kolicina1"><br>
        <input type="submit" value="izmeni" name="izmeni"><br>
    </form>


<?php

if (isset($_POST['izmeni']) == true) {
    $pice1=$_POST['pice1'];
    $pocetnostanje1=$_POST['pocetnostanje1'] or 0;
    $dodato1=$_POST['dodato1'] or 0;
    $krajnjestanje1=$_POST['krajnjestanje1'] or 0;
    $cena1=$_POST['cena1'] or 0;
    $kolicina1=$_POST['kolicina1'] or 0;

        $sql = "UPDATE lista SET pocetno_stanje ='" . $pocetnostanje1 . "' ,dodato='" . $dodato1 . "',krajnje_stanje='" . $krajnjestanje1 . "',cena='" . $cena1 . "',kolicina='" .  $kolicina1 . "' WHERE ime_pica='" . $pice1 ."'" ;


        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }


?>