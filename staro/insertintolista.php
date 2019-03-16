
<?php

require 'connectMySQL.php';
require 'function.php';
?>


<form action="insertintolista.php" method="post" >
    Ime pica : <input type="text" name="imepica" ><br>
    Pocetno stanje : <input type="text" name="pocetnostanje" ><br>  
    Cena : <input type="text" name="cena" ><br>
    <input type="submit"><br>
</form>

<?php


if (!empty($imepica)&&!empty($pocetnostanje)&&!empty($cena)) {
    //if($imepica)
    
 $sql = "INSERT INTO lista (ime_pica,pocetno_stanje,cena) VALUES('$imepica', '$pocetnostanje', '$cena') ";
     
 
 if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
    echo "<meta http-equiv='refresh' content='0'>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
	echo "Popunite sve tabele";
}
 
}







    


