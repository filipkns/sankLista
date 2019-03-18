<?php


$values = "SELECT ime_pica FROM lista ";
$values1 = mysqli_query($conn, $values);
$option = '';

while ($row = mysqli_fetch_assoc($values1)) {

    $option .= '<option value = "' . $row['ime_pica'] . '">' . $row['ime_pica'] . '</option>';
};

?>

    <form action="index.php" method="post">
        <select name="pice" plaseholder="Izaberi pice">
            <option value="">Izaberi pice</option>
            <?php echo $option; ?><br>

        </select>

        <br><br>
        <input type="submit" value="Obrisi" name="delete"><br>
    </form>

<?php
if (isset($_POST['delete'])) {
    $pice = $_POST['pice'];

    $upit = "SELECT id FROM lista WHERE ime_pica='" . $pice . "'";


    $upit1 = mysqli_query($conn, $upit);


    while ($row = mysqli_fetch_assoc($upit1)) {

        $idpica = $row["id"];

        $obrisipice = "DELETE FROM lista WHERE id='" . $idpica . "'";



        if ($upit2 = mysqli_query($conn, $obrisipice) == true) {



            echo "<meta http-equiv='refresh' content='0'>";
            echo "Uspesno ste obisali : " . $pice . "<br>";
        }

    }


}




