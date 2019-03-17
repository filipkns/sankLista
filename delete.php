<?php


$values = "SELECT ime_pica FROM pica ";
$values1 = mysqli_query($conn, $values);
$option = '';

while ($row = mysqli_fetch_assoc($values1)) {

    $option .= '<option value = " ' . $row['ime_pica'] . '">' . $row['ime_pica'] . '</option>';
};

?>

    <form action="index.php" method="post">
        <select name="pice" plaseholder="Izaberi pice">
            <option value="">Izaberi pice</option>
            <?php echo $option; ?><br>

        </select>

        <br><br>
        <input type="submit" value="Obrisi" name="submit"><br>
    </form>

<?php
if (isset($_POST['submit'])) {
    $pice = $_POST['pice'];

}





