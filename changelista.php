
<?php

require 'connectMySQL.php';
include 'sanklista.php';
?>

<form action="changelista.php" method="post">
    <select> Pice : <option value="" </select>
    Pocetno stanje : <input type="text" name="pocetnostanje" ><br>  
    Dodato : <input type="text" name="dodato" ><br>
    Cena : <input type="text" name="cena" ><br>
    Stanje pica : <input type="text" name="stanjepica" ><br>
    <input type="submit"><br>
</form>

    
    
 <?php

if(!empty($imepica)){
    if (!empty($pocetnostanje)||!empty($cena)||!empty($dodato)||!empty($stajnepica)) {
    
     $sql = "UPDATE lista SET (pocetno_stanje,cena) WHERE('$pocetnostanje', '$cena') ";
     
 
         if (mysqli_query($connection, $sql)) {
             echo "New record created successfully";
             echo "<meta http-equiv='refresh' content='0'>";
            } else {
             echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
 
}
}

?>