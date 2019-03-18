<?php


?>


    <form action="index.php" method="post">
        Ime pica : <input type="text" name="imepica"><br>
        Pocetno stanje : <input type="text" name="pocetnostanje"><br>
        Cena : <input type="text" name="cena"><br>
        <input type="submit" name="insertinto"><br>
    </form>

<?php
if (isset($_POST['insertinto'])) {
    $imepica = $_POST['imepica'];
    $pocetnostanje = $_POST['pocetnostanje'];
    $cena = $_POST['cena'];

    if (!empty($imepica) && !empty($pocetnostanje) && !empty($cena)) {


        $sql = "INSERT INTO lista (ime_pica,pocetno_stanje,cena) VALUES('" . $imepica . "','" . $pocetnostanje . "','" . $cena . "')";


        if (mysqli_query($conn, $sql) == true) {
            echo "New record created successfully";
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            echo "Popunite sve tabele";
        }

    }
}






    


